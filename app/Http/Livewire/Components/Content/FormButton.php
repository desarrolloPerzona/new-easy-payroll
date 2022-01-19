<?php

namespace App\Http\Livewire\Components\Content;

use Livewire\Component;

class FormButton extends Component
{
    public $color, $type, $icon, $title, $classes;

    public function mount($color, $type, $icon, $title, $classes)
    {
        $this->color = $color;
        $this->type = $type;
        $this->icon = $icon;
        $this->title = $title;
        $this->classes = $classes;

    }


    public function render()
    {
        return view('livewire.components.content.form-button');
    }
}
