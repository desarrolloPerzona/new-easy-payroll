<?php

namespace App\Http\Livewire\Tenant\ImssPatronalRegister;

use App\Models\Tenant\Branch;
use App\Models\Tenant\ImssPatronalRegister;
use Livewire\Component;
use function view;

class ShowTable extends Component
{

    protected $listeners = ['delete' => 'deleteRecord'];
    public $search, $branches;


    public function mount(){
        $this->branches = Branch::all();
    }

    public function render()
    {
        $registers = ImssPatronalRegister::orderBy('id', 'DESC')->get();
        return view('livewire.tenant.imss-patronal-register.show-table', compact('registers'));
    }
    public function deleteRecord(ImssPatronalRegister $register){
        $register->delete();
    }
}
