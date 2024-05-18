<?php

namespace App\Http\Controllers\Specialiste;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $patients = Patient::get();

        return view('specialiste.rendez-vous.all', [
            'patients' => $patients,
        ]);
    }

    public function assignationIndex()
    {
        $appointments = Appointment::with('patient')->get();

        $dispos = Appointment::with('patient')->get();

        foreach ($dispos as $dispo) {
            $date = $dispo->date;
            $heure_rdv = $dispo->hours;
            $type_specialite_patient = $dispo->type_specialite;
            // dd($type_specialite_patient);
        }
        $medecins_disponibles = User::where('role', 'medecin')
                           ->whereDoesntHave('appointments', function($query) use ($heure_rdv) {
                               $query->where('hours', $heure_rdv);
                           })
                           ->where('specialite', $type_specialite_patient)
                           ->get();
        
                // }



        return view('specialiste.assignation.index', [
            'appointments' => $appointments,
            // 'medecins_disponibles' => $medecins_disponibles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $appointment = new Appointment();
        $appointment->type_specialite = $request->concerner;
        $appointment->patient_id = $request->patient;
        // $appointment->medical_id = Auth::id();
        $appointment->date = $request->date;
        $appointment->hours = $request->time;
        $appointment->motif = $request->pattern;

        $date = date('Y-m-d');
        $time = date('H-i');
        $time = intval($time) + 1;
        $time = $time.':'.date('i');

        if($date >= $request->date  ){
            return redirect()->back()->with('success', 'Vous ne pouvez selectionner un temps deja passe');
        }
        // dd($date, $request->date, $time, $request->time);
        // dd($appointment);
        $appointment->save();
        
        return redirect()->back()->with('success', 'Rendez vous ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
