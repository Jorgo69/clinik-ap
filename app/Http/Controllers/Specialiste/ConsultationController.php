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
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::get();

        return view('specialiste.consultation.listePatients', [
            'patients' => $patients
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
            $consultation->size = $request->size;
            $consultation->weight = $request->weight;
            $consultation->pulse = $request->pulse;
            $consultation->temperature = $request->temperature;
            // $consultation->temperature = $request->temperature;
            $consultation->drugs = 'Null';
            $consultation->pace = 'Null';
            $consultation->observation = 'Null';
            $consultation->patient_id = $request->patient_id;
            $consultation->medecin_id = Auth::id();

            dd($consultation);
            // $consultation->save();
            return redirect()->back()->with('success', 'Note Prise avec Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $patient = User::find($id);
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
