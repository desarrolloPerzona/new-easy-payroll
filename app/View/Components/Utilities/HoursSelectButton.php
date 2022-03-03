<?php

namespace App\View\Components\Utilities;

use Illuminate\View\Component;

class HoursSelectButton extends Component
{
    public $name, $id, $classes, $attribs, $value, $livewire;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $id, $classes, $attribs, $value, $livewire)
    {
        $this->name = $name;
        $this->id = $id;
        $this->classes = $classes;
        $this->attribs = $attribs;
        $this->value = $value;
        $this->livewire = $livewire;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utilities.hours-select-button');
    }
}
