<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Breadcrumb extends Component
{

    public $parent;

    public function mount($parent){
        $this->parent = $parent;
    }

    public function render()
    {
        return view('livewire.components.breadcrumb');
    }
}
