<?php

namespace App\Http\Livewire\Landlord\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationsControl extends Component
{
    public $user;


    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.landlord.dashboard.notifications-control');
    }
}
