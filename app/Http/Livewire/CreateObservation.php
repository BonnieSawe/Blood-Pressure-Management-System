<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use App\Models\Observation;

class CreateObservation extends Component
{
    public $form = [
        'user_id',
        'patient_id',
        'systolic',
        'diastolic',
        'category',
        'description'
    ];

    public $patients = [];
    public $categories = [];

    public function mount()
    {
        $this->patients = Patient::all();
        $this->categories = [
            'Normal' => 'Normal',
            'Elevated' => 'Elevated',
            'Hypertension Stage 1' => 'Hypertension Stage 1',
            'Hypertension Stage 2' => 'Hypertension Stage 2',
            'Hypertensive crisis' => 'Hypertensive crisis',
        ];
    }
    
    public function submit()
    {
        $this->validate([
            'form.patient_id' => 'required',
            'form.systolic' => 'required',
            'form.diastolic' => 'required',
            'form.category' => 'required',
        ]);

        $observation = new Observation();

        $this->form['user_id'] = auth()->id();
        
        $observation->create($this->form);

        session()->flash('message', "Observation Added Successfully");

        return redirect(route('observations'));
    } 

    public function render()
    {
        return view('livewire.create-observation')->extends('layouts.dash');  
    }
}
