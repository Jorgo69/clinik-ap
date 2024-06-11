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
        // recuperation de tous les rdv
        $appointments = Appointment::with('patient', 'medecin')->orderByDesc('created_at')->get();

        return view('specialiste.rendez-vous.all', [
            'patients' => $patients,
            'appointments' => $appointments,
        ]);
    }


    // CRUD Appointment
    // LEcture
    public function indexInProgress()
    {
        $patients = Patient::get();
        // recuperation de tous les rdv
        $appointments = Appointment::with('patient', 'medecin')
                        ->where('medecin_id', '!=', NULL)    
        ->get();

        return view('specialiste.rendez-vous.inProgress', [
            'patients' => $patients,
            'appointments' => $appointments,
        ]);
    }

    //Modification
    public function assignationIndex()
    {
        // Récupérer les spécialités demandées dans les rendez-vous
        $appointments = Appointment::whereNull('medecin_id')->get();

        // Initialiser une collection vide pour stocker les médecins disponibles
        $availableMedecins = collect();

        // Pour chaque rendez-vous sans médecin assigné
        foreach ($appointments as $appointment) {
            // Récupérer les médecins correspondant à la spécialité du rendez-vous
            $medecins = User::where('specialite', $appointment->type_specialite)
                        ->where('role', 'medecin')
                        ->get();

            // Ajouter les médecins disponibles à la collection
            foreach ($medecins as $medecin) {
                $availableMedecins->push($medecin);
            }
        }
        // dd($availableMedecins);

        // Supprimer les doublons dans la collection
        $availableMedecins = $availableMedecins->unique('id');

        
        /* $medecinsDisponibles = Appointment::whereNotNull('medecin_id')
            ->get()
            ->filter(function ($appointment) {
                $medecin = User::find($appointment->medecin_id);
                return $appointment->type_specialite === $medecin->specialite;
            }); */

        
        return view('specialiste.assignation.index', [
            'availableMedecins' => $availableMedecins,
            'appointments' => $appointments,
            // 'medecinsDisponibles' => $medecinsDisponibles
        ]);

        
        // $dispos = Appointment::with('patient')->get();
        // $medecins_par_specialite = []; // Tableau pour stocker les médecins par spécialité

        // foreach ($dispos as $dispo) {
        //     $date = $dispo->date;
        //     $heure_rdv = $dispo->hours;
        //     $type_specialite_patient = $dispo->type_specialite;

        //     // Récupérer les médecins disponibles pour la spécialité du patient actuel
        //     $medecins = User::where('role', 'medecin')
        //                     ->where('specialite', $type_specialite_patient)
        //                     ->get();

        //     // Ajouter les médecins trouvés pour cette spécialité au tableau
        //     $medecins_par_specialite[$type_specialite_patient] = $medecins;
        // }

        // vue
        //         @foreach($medecins_par_specialite as $specialite => $medecins)
        //     <h3>Médecins pour la spécialité {{ $specialite }}</h3>
        //     <ul>
        //         @foreach($medecins as $medecin)
        //             <li>{{ $medecin->nom }} {{ $medecin->prenom }}</li>
        //         @endforeach
        //     </ul>
        // @endforeach


        // // Maintenant, $medecins_par_specialite contient tous les médecins disponibles pour chaque spécialité de patient
        // // Vous pouvez accéder à ces données en utilisant $medecins_par_specialite['nom_specialite']

    }

    // Modification RDV avec medecin deja assigner
    public function assignationModif(int $id)
    {
        $appointment = Appointment::find($id);
        $medecin = User::where('role', 'medecin')->get();
        
            return view('specialiste.rendez-vous.modifRDV', [
                'appointment' => $appointment,
                'medecins' => $medecin,
            ]);
    }

    public function  assignationAttribute(Request $request)
    {
        $rdv = Appointment::where('id', $request->rdv)->first();
        $assignation = $rdv;
        $assignation ->medecin_id = $request->medecin_id;
        $assignation->update();

            return redirect()->back()->with('success', 'Medecin assigner avec Success');
    }

    public function rdvHonnorer()
    {
        
        $rdvs = Appointment::with('patient')
                ->get();
        $events = $rdvs->map(function($rdv) {
            return [
                'title' => $rdv->motif . ' - ' . $rdv->patient->name . ' ' . $rdv->patient->firstname,
                'url' => route('specialiste.detail.consultation', ['id' => $rdv->id]),
                'color' => $rdv->statut ? 'green' : 'red', // Change color based on statut
                'start' => $rdv->date . 'T' . $rdv->hours
            ];
        });

        return response()->json($events);

    }

    public function honnorer()
    {

        return view('specialiste.rendez-vous.honnorer');
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
