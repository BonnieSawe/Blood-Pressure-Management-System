<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class Logout extends Component
{
    /**
         * logout
         *
         * @return RedirectResponse
         */
        public function logout()
        {
            info(566);
            auth()->logout();
            return redirect()->route('login');
        }

        /**
         * @return View
         */
        public function render()
        {
            return view('livewire.logout');
        }

}
