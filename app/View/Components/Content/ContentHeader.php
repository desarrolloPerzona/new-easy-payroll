<?php

namespace App\View\Components\Content;

use Illuminate\View\Component;

class ContentHeader extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
         $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content.content-header');
    }
}
