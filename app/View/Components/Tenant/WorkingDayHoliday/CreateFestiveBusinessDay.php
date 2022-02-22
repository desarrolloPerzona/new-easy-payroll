<?php

namespace App\View\Components\Tenant\WorkingDayHoliday;

use Illuminate\View\Component;

class CreateFestiveBusinessDay extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tenant.working-day-holiday.create-festive-business-day');
    }
}
