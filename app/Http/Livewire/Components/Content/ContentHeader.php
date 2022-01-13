<?php

namespace App\Http\Livewire\Components\Content;

use Livewire\Component;

class ContentHeader extends Component
{
    public $title;

    public function mount($title)
    {
     $this->title = $title;
    }

    public function render()
    {
        return view('livewire.components.content.content-header');
    }
}
