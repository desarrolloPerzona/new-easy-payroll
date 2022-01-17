<?php

namespace App\Http\Livewire\Components\Crud\EmployerRegister;

use Livewire\Component;

class Create extends Component
{
    public $title;

    public function mount($title){
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.components.crud.employer-register.create');
    }
}
