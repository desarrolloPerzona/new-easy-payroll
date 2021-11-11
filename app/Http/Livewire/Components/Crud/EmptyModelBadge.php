<?php

namespace App\Http\Livewire\Components\Crud;

use Livewire\Component;

class EmptyModelBadge extends Component
{
    public $description;

    public function mount($description)
    {
        $this->description = $description;
    }

    public function render()
    {
        return view('livewire.components.crud.empty-model-badge');
    }
}
