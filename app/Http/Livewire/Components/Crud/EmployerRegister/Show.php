<?php

namespace App\Http\Livewire\Components\Crud\EmployerRegister;


use App\Models\Tenant\Business;
use App\Models\Tenant\ImssPatronalRegister;
use Livewire\Component;

class Show extends Component
{

    public $search, $businesses;


    public function mount(){
        $this->businesses = Business::all();
    }

    public function render()
    {
            $registers = ImssPatronalRegister::all();
//            ->orWhere('content', 'like' , '%' . $this->search . '%')
//            ->paginate(10);
        return view('livewire.components.crud.employer-register.show', compact('registers'));
    }
}
