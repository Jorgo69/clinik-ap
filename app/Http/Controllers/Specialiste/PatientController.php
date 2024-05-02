<?php

namespace App\Http\Controllers\Specialiste;

use App\Http\Controllers\Controller;
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
        $patients = User::where('statut', 'patient')->get();

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
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);

        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'birthdate' => $request->birthdate,
            'email' => $request->email,
            'password' => Hash::make('password'),
        ]);

        return redirect()->back()->with('success', 'Patient enreigistrer avec success');
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



        return view('specialiste.patient.details', [
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
