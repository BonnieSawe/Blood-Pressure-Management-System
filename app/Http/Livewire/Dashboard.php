<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Patient;
use Livewire\Component;
use App\Models\Observation;

class Dashboard extends Component
{
    public $patients;
    public $observations;
    public $staff;

    public function mount()
    {
        $this->patients = Patient::count();
        $this->observations = Observation::count();
        $this->staff = User::count();
    }
    public function render()
    {
        return view('livewire.dashboard')->extends('layouts.dash'); 
    }
}
