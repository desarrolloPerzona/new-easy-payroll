<?php

namespace App\Http\Livewire\Dashboaord\Components;

use Livewire\Component;

class UserHeaderNotifications extends Component
{
    public $user;
    private $notifications;

    public function mount(){

        $this->notifications = $this->user->notifications();

    }


    public function render()
    {
       $notifications = $this->notifications;
        return view('livewire.dashboaord.components.user-header-notifications',compact('notifications'));
    }
}
