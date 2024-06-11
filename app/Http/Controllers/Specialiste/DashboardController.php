<?php

namespace App\Http\Controllers\Specialiste;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Patients Vu & Total
        $patients = Patient::count();
        $patiens = Patient::paginate(2);

        // Consultations Total
        $consultationsTotals = Consultation::count();

        // Consultations du connecter
        $consults = Consultation::where('medecin_id', Auth::id())->count();

        // rdv du jour        
        $todaysRDV = Appointment::where('medecin_id', Auth::id())
        ->whereDate('date', Carbon::today())
        ->count();

        // Medecins Total
        $medecinsTotals = User::where('role', 'medecin')->count();

        // Récupérer tous les rendez-vous
        $rdvs = Appointment::all();

        // Formater les données pour FullCalendar
        $events = $rdvs->map(function($rdv) {
            return [
                'title' => $rdv->motif,
                'start' => $rdv->date . 'T' . $rdv->hours,
                'extendedProps' => [
                    'type_specialite' => $rdv->type_specialite,
                    'medecin_id' => $rdv->medecin_id,
                    'patient_id' => $rdv->patient_id,
                ]
            ];
        });

        // return response()->json($events);

        return view('specialiste.dashboard', [
            'patients' => $patients,
            'patiens' => $patiens,
            'consultations' => $consultationsTotals,
            'medecins' => $medecinsTotals,
            'consults' => $consults,
            'todaysRDV' => $todaysRDV
            
        ]);
    }

    public function getEvents()
    {
        $rdvs = Appointment::with('patient')
                ->where('medecin_id', Auth::id())
                ->get();
        $events = $rdvs->map(function($rdv) {
            return [
                'title' => $rdv->motif . ' - ' . $rdv->patient->name . ' ' . $rdv->patient->firstname,
                // 'title' => '<a href="/rdv/' . $rdv->id . '">' . $rdv->motif . ' - ' . $rdv->patient->name . ' ' . $rdv->patient->firstname . '</a>',
                'url' => route('specialiste.detail.consultation', ['id' => $rdv->id]),
                'color' => $rdv->statut ? 'green' : 'red', // Change color based on statut
                'start' => $rdv->date . 'T' . $rdv->hours
            ];
        });

        return response()->json($events);
    }

    public function Welcome()
    {
        // Patients Vu & Total
        $patients = Patient::count();
        $patiens = Patient::paginate(2);

        // Consultations Total
        $consultationsTotals = Consultation::count();

        // Consultations du connecter
        $consults = Consultation::where('medecin_id', Auth::id())->count();

        // rdv du jour        
        $todaysRDV = Appointment::where('medecin_id', Auth::id())
        ->whereDate('date', Carbon::today())
        ->count();

        // Medecins Total
        $medecinsTotals = User::where('role', 'medecin')->count();

        return view('specialiste.dashboard', [
            'patients' => $patients,
            'patiens' => $patiens,
            'consultations' => $consultationsTotals,
            'medecins' => $medecinsTotals,
            'consults' => $consults,
            'todaysRDV' => $todaysRDV
            
        ]);
    }

    public function recentPatient()
    {
        // $consultationsTotals = Consultation::count();

        return view('components.specialiste.revenueBoard',[
            // 'consultations' => $consultations,
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
        //
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
