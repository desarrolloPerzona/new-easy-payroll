<?php

namespace App\View\Components\Utilities;

use Illuminate\View\Component;

class HeaderSection extends Component
{

    public $title, $classes, $maxSize;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $classes, $maxSize)
    {
        $this->title = $title;
        $this->classes = $classes;
        $this->maxSize = $maxSize;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utilities.header-section');
    }
}
