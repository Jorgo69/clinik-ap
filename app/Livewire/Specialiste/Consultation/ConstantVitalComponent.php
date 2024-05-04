<?php

namespace App\Livewire\Specialiste\Consultation;

use App\Models\Consultation;
use Livewire\Component;

class ConstantVitalComponent extends Component
{
    // All Input:
    public $size, $weight, $temperature, $pulse, $frequence, $observation;
    public $drugs, $pace;

    public $patient;

    public $cardInput;

    protected $rules = [
        'size' => 'required|integer',
        'weight' => 'required|interger',
        'pulse' => 'required|interger',
        'temperature' => 'required|interger',
        'frequence' => 'required|interger',
        'observation' => 'required|interger',

        'drugs.*' => 'required|interger',
        'pace.*' => 'required|interger',

    ];

    protected $messages = [
        'size.required' => 'La taille est obligatoire pour continuer',
        'weight.required' => 'Le Poid est obligatoire pour continuer',
        'pulse.required' => 'Le nombre de Pule est obligatoire pour continuer',
        'frequence.required' => 'La frequence cardiaque est requise',
        'observation.required' => 'Une observation est obligatoire pour continuer',

        'drugs.required' => 'Un traitement est recommande',
        'pace.required' => 'La frequence de cet traitement',
    ];
    
    public function mount($patient)
    {
        $this -> patient = $patient;
        $this->cardInput = Consultation::all();
    }
    public function AddConstant()
    {
        // $this->validate();
        dd($this->patient);
    }
    public function render()
    {
        return view('livewire.specialiste.consultation.constant-vital-component');
    }
    
}
