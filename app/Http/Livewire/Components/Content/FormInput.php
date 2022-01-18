<?php

namespace App\Http\Livewire\Components\Content;

use Livewire\Component;

class FormInput extends Component
{
    public $name, $type, $placeholder, $classes, $identifier, $attributes, $value;

    public function mount($name, $type, $placeholder, $classes, $identifier, $attributes, $value){
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->classes = $classes;
        $this->identifier = $identifier;
        $this->attributes = $attributes;
        $this->value = $value;
    }
}
