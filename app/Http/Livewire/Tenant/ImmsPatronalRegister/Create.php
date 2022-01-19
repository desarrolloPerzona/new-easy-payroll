<?php

namespace App\Http\Livewire\Tenant\ImmsPatronalRegister;

use App\Models\Tenant\Branch;
use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        $branches = Branch::all();
        return view('livewire.tenant.imms-patronal-register.create', compact('branches'));
    }
}
