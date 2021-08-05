<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Patient extends Component
{
    public $form = [
        'name',
        'age',
        'email',
        'phone',
        'gender',
        'weight',
        'height'
    ];
    
    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'gender' => 'required',
        ]);

        $patient = Patient::create($this->form);
    } 

    public function render()
    {
        return view('livewire.patient');
    }
}
