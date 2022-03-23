<?php

namespace App\Http\Livewire\Tenant\ImmsPatronalRegister;

use App\Models\Tenant\Branch;
use App\Models\Tenant\ImssPatronalRegister;
use Livewire\Component;

class ShowTable extends Component
{

    protected $listeners = ['delete' => 'deleteRecord'];
    public $search, $branches;


    public function mount(){
        $this->branches = Branch::all();
    }

    public function render()
    {
        $registers = ImssPatronalRegister::all();
        return view('livewire.tenant.imms-patronal-register.show-table', compact('registers'));
    }
    public function deleteRecord(ImssPatronalRegister $register){
        $register->delete();
    }
}
