<?php

namespace App\View\Components\Utilities;

use Illuminate\View\Component;

class CreateButton extends Component
{
    public $route, $title, $classes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $title, $classes)
    {
        $this->route = $route;
        $this->title = $title;
        $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utilities.create-button');
    }
}
