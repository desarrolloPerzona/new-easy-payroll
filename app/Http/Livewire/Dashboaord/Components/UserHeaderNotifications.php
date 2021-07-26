<?php

namespace App\Http\Livewire\Dashboaord\Components;

use Auth;
use Livewire\Component;

class UserHeaderNotifications extends Component
{
    public $user;


    public function mount(){

$this->user = Auth::user();
    }


    public function render()
    {
       $user = $this->user;
        return view('livewire.dashboaord.components.user-header-notifications',compact('user'));
    }
}
