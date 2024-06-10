<?php

namespace App\Http\Controllers\Specialiste;

use App\Http\Controllers\Controller;
use App\Http\Requests\Specialiste\PatientRequest;
use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::orderBy('created_at', 'asc')->get();
        // dd($patients);

        

        return view('specialiste.patient.allPatient', [
            'patients' => $patients,
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
    public function store(PatientRequest $request)
    {
        
  

        $user = new Patient() ;
            $user->name = $request->name;
            $user->firstname = $request->firstname;
            $user->birthdate = $request->birthdate;
            $user->number = $request->number;
            $user->residence = $request->residence;
            $user->sexe = $request->sexe;
            $user->email = $request->email;
            $user->save();
            // dd($user);
        return redirect()->back()->with('success', 'Patient enreigistrer avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        $patient = Patient::find($id);
        $birthday = date($patient->birthdate);
        $birthday = intval($birthday);
        $years = date('Y-m-d');
        $years = intval($years) ;
        $years = $years - $birthday;
        
        $dossier = Consultation::where('patient_id', $patient->id)->get();



        return view('specialiste.patient.details', [
            'patient' =>  $patient,
            'years' => $years,
            'dossiers' => $dossier,
        ]);
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
