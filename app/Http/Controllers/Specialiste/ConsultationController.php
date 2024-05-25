<?php

namespace App\Http\Controllers\Specialiste;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    /**
     * Affiche tout les patients.
     */
    public function index()
    {
        $patients = Patient::get();

        return view('specialiste.consultation.listePatients', [
            'patients' => $patients
        ]);
    }

    /**
     * Affiche les patient ayant effectue une consultation
     */
    public function allPatient()
    {
        $consulters = Consultation::with('patients')->get();
        return view('specialiste.consultation.newPatients', [
            'consulters' => $consulters,
        ]);
    }

    /**
     * A propos d'une consultation : Details
     */
    public function aPatient(int $id)
    {
        $detailsConsultations = Consultation::find($id);

        return view('specialiste.consultation.detailConsultation', [
            'detailsConsutations' => $detailsConsultations,
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
        
        $consultation = new Consultation();

        $consultation->medecin_id = Auth::id();
        $consultation->patient_id = $request->patient_id;
        
        $consultation->pattern = $request->pattern;

            $consultation->temperature = $request->temperature;
            $consultation->weight = $request->poid;
            $consultation->pulse = $request->poul;
            $consultation->stetoscopy = $request->stetoscopie;
            $consultation->size = $request->poid;
            
            
            $consultation->diagnostic = $request->diagnostic;
            $consultation->observation = $request->observation;

            // dd($consultation);
            $consultation->save();
            return redirect()->back()->with('success', 'Note Prise avec Success');
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

        return view('specialiste.consultation.detailsConsulte', [
            'patient' => $patient,
            'years' => $years
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
