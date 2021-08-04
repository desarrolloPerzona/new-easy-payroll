<?php

namespace App\Http\Livewire\Dashboard\Includes;

use Auth;
use Livewire\Component;

class NotificationsControl extends Component
{

    public $user;


    public function mount(){

        $this->user = Auth::user();
    }



    public function render()
    {
        return view('livewire.dashboard.includes.notifications-control');
    }
}
