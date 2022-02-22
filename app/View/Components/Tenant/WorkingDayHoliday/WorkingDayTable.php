<?php

namespace App\View\Components\Tenant\WorkingDayHoliday;

use App\Models\Tenant\BusinessWorkday;
use Illuminate\View\Component;

class WorkingDayTable extends Component
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
        $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        $workDays = BusinessWorkday::all();

        return view('components.tenant.working-day-holiday.working-day-table',
                compact('workDays', 'daysArray'));
    }
}
