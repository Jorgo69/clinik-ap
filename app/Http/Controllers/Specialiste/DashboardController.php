<?php

namespace App\Http\Controllers\Specialiste;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Patients Vu & Total
        $patients = Patient::paginate(2);

        // Consultations Total
        $consultationsTotals = Consultation::count();

        // Medecins Total
        $medecinsTotals = User::where('role', 'medecin')->count();

        return view('specialiste.dashboard', [
            'patients' => $patients,
            'consultations' => $consultationsTotals,
            'medecins' => $medecinsTotals,
            
        ]);
    }

    public function Welcome()
    {
        $patients = Patient::paginate(2);

        // Consultations Total
        $consultationsTotals = Consultation::count();

        // Medecins Total
        $medecinsTotals = User::where('role', 'medecin')->count();

        return view('specialiste.dashboard', [
            'patients' => $patients,
            'consultations' => $consultationsTotals,
            'medecins' => $medecinsTotals,
            
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
