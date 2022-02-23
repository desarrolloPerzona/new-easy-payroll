<?php

namespace App\View\Components\Utilities;

use Illuminate\View\Component;

class SectionHeader extends Component
{
    public $title, $classes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $classes)
    {
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
        return view('components.utilities.section-header');
    }
}
