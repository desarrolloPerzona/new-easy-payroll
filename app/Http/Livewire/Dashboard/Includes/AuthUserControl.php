<?php

namespace App\Http\Livewire\Dashboard\Includes;

use Auth;
use Livewire\Component;

class AuthUserControl extends Component
{
    public function render()
    {
        return view('livewire.dashboard.includes.auth-user-control',[
            'user' => Auth::user(),
        ]);
    }
}
