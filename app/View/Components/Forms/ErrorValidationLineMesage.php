<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class ErrorValidationLineMesage extends Component
{

    /**
     * @var String
     */

    public string $field;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field)
    {
        $this->field = $field;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.error-validation-line-mesage');
    }
}
