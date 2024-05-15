<?php

namespace App\Livewire\Specialiste;

use App\Models\User;
use Livewire\Component;

class SearchComponent extends Component
{
    public ? string $query;
    public $patients = [];

    public function updatedQuery()
    {
        $keyWord = '%'. $this->query .'%';

        if(strlen($this->query) > 2)
        {
            $this->patients = User::where('firstname', 'like', $keyWord)
            ->orWhere('name', 'like', $keyWord)
            // ->orWhere('status', 'patient')
            ->get()
        ;

        }

        
        // dd($this->patients);
    }

    public function render()
    {
        
        return view('livewire.specialiste.search-component', [
            // 'users' => User::where($this->search)->get(),
        ]);
    }
}
