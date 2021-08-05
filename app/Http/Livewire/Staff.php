<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Staff extends Component
{
    public $form = [
        'name',
        'dob',
        'email',
        'phone',
        'gender',
        'weight',
        'height'
    ];
    
    public function create()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
        ]);

        $patient = new Patient();

        $patient->create($this->form);
    } 

    public function render()
    {
        return view('livewire.staff')->extends('layouts.dash');  
    }
}
