<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Observation extends Component
{
    public function render()
    {
        return view('livewire.observation')->extends('layouts.dash');  
    }
}
