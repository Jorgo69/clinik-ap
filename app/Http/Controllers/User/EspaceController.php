<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EspaceController extends Controller
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

        return view('specialiste.dashboard', [
            'patients' => $patients,
            'patiens' => $patiens,
            'consultations' => $consultationsTotals,
            'medecins' => $medecinsTotals,
            'consults' => $consults,
            'todaysRDV' => $todaysRDV
            
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
