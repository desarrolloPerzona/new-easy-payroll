<?php

namespace App\Http\Livewire\Components\Crud\EmployerRegister;

use App\Models\Tenant\EmployerRegister;
use Livewire\Component;

class Show extends Component
{

    public $search;

    public function render()
    {
            $registers = EmployerRegister::where('name', 'like' , '%' . $this->search . '%')
            ->paginate(10);
//            ->orWhere('content', 'like' , '%' . $this->search . '%')
//            ->paginate(10);
        return view('livewire.components.crud.employer-register.show', compact('registers'));
    }
}
