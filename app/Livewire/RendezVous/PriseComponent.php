<?php

namespace App\Livewire\RendezVous;

use App\Models\Patient;
use Livewire\Component;

class PriseComponent extends Component
{
    
    public function render()
    {
        $patients = Patient::get();

        return view('livewire.rendez-vous.prise-component', [
            'patients' => $patients,
        ]);
    }
}
