<?php

namespace App\Http\Livewire\Components\Crud\EmployerRegister;


use App\Models\Tenant\Branch;
use App\Models\Tenant\ImssPatronalRegister;
use Livewire\Component;

class Show extends Component
{

    public $search, $branches;


    public function mount(){
        $this->branches = Branch::all();
    }

    public function render()
    {
            $registers = ImssPatronalRegister::all();
//            ->orWhere('content', 'like' , '%' . $this->search . '%')
//            ->paginate(10);
        return view('livewire.components.crud.employer-register.show', compact('registers'));
    }
}
