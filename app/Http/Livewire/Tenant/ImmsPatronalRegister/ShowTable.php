<?php

namespace App\Http\Livewire\Tenant\ImmsPatronalRegister;

use App\Models\Tenant\Branch;
use App\Models\Tenant\ImssPatronalRegister;
use Livewire\Component;

class ShowTable extends Component
{

    public $search, $branches, $firstBranch;


    public function mount(){
        $this->branches = Branch::all();
        $this->firstBranch = Branch::findOrfail(1)->get();
    }

    public function render()
    {
        $registers = ImssPatronalRegister::all();
        return view('livewire.tenant.imms-patronal-register.show-table', compact('registers'));
    }
}
