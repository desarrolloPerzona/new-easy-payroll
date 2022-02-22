<?php

namespace App\View\Components\Tenant\WorkingDayHoliday;

use Illuminate\View\Component;

class CreateWorkingDay extends Component
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
        $workdayTypes = ['diurno', 'nocturno', 'mixto'];

        $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        return view('components.tenant.working-day-holiday.create-working-day',
                    compact('workdayTypes', 'daysArray'));
    }
}
