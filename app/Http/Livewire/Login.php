<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.login')->extends('layouts.guest');        ;
    }

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            session()->flash('message', "Welcome back ". auth()->user()->name );
            return redirect(route('dashboard'));
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }
}
