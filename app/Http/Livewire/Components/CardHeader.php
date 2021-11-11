<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class CardHeader extends Component
{

    public $title;

    public function mount($title){
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.components.card-header');
    }
}
