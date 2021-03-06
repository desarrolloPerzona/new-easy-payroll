<?php

namespace App\Http\Livewire\Components\Content;

use Livewire\Component;

class ContentHeader extends Component
{
    /**
     * variables Title as text and Icon as Fontawesome
     */

    public $title;
    public $icon;

    public function mount($title, $icon)
    {
        $this->title = $title;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('livewire.components.content.content-header');
    }
}
