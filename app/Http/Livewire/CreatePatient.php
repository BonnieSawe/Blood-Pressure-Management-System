<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class CreatePatient extends Component
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

    public $genderOptions = [
        'male' => 'Male',
        'female' => 'Female',
        'transgender' => 'Transgender',
    ];
    
    public function submit()
    {
        $this->validate([
            'form.email' => 'required',
            'form.name' => 'required',
            'form.phone' => 'required',
            'form.dob' => 'required',
            'form.gender' => 'required',
        ]);

        $patient = new Patient();

        $patient->create($this->form);

        session()->flash('message', "Created Successfully");

        return redirect(route('patients'));
    } 

    public function render()
    {
        return view('livewire.create-patient')->extends('layouts.dash');  
    }
}
