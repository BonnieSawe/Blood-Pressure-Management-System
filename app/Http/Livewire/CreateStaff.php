<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use App\Models\Patient;
use Livewire\Component;

class CreateStaff extends Component
{
    public $form = [
        'name',
        'email',
        'role_id',
        'password',
    ];

    public $roles = [];

    public function mount()
    {
        $this->roles = Role::all();
    }
    
    public function submit()
    {
        $this->validate([
            'form.email' => 'required',
            'form.name' => 'required',
            'form.password' => 'required',
            'form.role_id' => 'required',
        ]);

        $staff = new User();

        $staff->create($this->form);

        session()->flash('message', "Created Successfully");

        return redirect(route('staff'));
    } 

    public function render()
    {
        return view('livewire.create-staff')->extends('layouts.dash');  
    }
}
