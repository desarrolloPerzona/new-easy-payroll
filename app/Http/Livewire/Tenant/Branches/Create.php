<?php

namespace App\Http\Livewire\Tenant\Branches;

use App\Models\Tenant\Business;
use Livewire\Component;

class Create extends Component
{
    public $business;

    public function mount($business){
        $this->business = $business;
    }

    public function render()
    {
        $businesses = Business::all();
        return view('livewire.tenant.branches.create', compact('businesses'));
    }
}
