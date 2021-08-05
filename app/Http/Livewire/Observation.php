<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Observation extends Component
{
    public $form, $password;

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }
    
    public function render()
    {
        return view('livewire.observation');
    }
}
