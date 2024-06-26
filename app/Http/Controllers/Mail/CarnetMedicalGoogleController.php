<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\CarnetMedicalGoogle;
use App\Models\Consultation;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CarnetMedicalGoogleController extends Controller
{
    public function index(int $id)
    {
        // Recuperation des data de la consult concerne
        $carnetData = Consultation::find($id);

        // recup du patient concernant via le data de la consult
        $patient = Patient::find($carnetData->patient_id);

        // Sending Mail
        try{
            // recup de l'email du patient concernant via le data du patient
            $mailPatient = $patient->email;
            Mail::to('estimegliti108@gmail.com')
            // la class du mail qui gere les donnee
                ->queue(new CarnetMedicalGoogle($carnetData));

        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'envoie de l\'Email: ' . $e->getMessage());
        }

        // dd($mailPatient);
        return view('emails.carnet.index');
    }
}
