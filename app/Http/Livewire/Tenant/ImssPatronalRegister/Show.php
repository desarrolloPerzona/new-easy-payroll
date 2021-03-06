<?php

namespace App\Http\Livewire\Tenant\ImssPatronalRegister;

use App\Models\Tenant\ImssPatronalRegister;
use Livewire\Component;

class Show extends Component
{
    public $name, $register;

    public $listeners = ['delete'];

    public function mount(ImssPatronalRegister $register){
        $this->name = $register->name;
        $this->register = $register;
    }

    public function render()
    {
        return view('livewire.tenant.imss-patronal-register.show');
    }

    public function delete(ImssPatronalRegister $register){

        $register->delete();

        session()->flash('message', 'delete');

        return redirect()->route('imss-employer-registers.index');
    }
}
