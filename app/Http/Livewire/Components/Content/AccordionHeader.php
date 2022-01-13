<?php

namespace App\Http\Livewire\Components\Content;

use Livewire\Component;

class AccordionHeader extends Component
{
    public $modelId,$name,$route,$iteration,$createdAt;

    public function mount($modelId,$name,$route,$iteration,$createdAt)
    {
        $this->modelId = $modelId;
        $this->route = $route;
        $this->name = $name;
        $this->iteration = $iteration;
        $this->cretatedAt = $createdAt;
    }

    public function render()
    {
        return view('livewire.components.content.accordion-header');
    }
}
