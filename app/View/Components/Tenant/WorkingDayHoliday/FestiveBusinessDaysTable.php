<?php

namespace App\View\Components\Tenant\WorkingDayHoliday;

use App\Models\Tenant\BusinessFestiveDay;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class FestiveBusinessDaysTable extends Component
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
        $appUrl = config('app.url');
        $currentYear = date('Y');

        $monthsArray = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        //        Get festive official days from API
        $responseFestiveDays = Http::withOptions(['verify' => false])->get($appUrl .'/api/official-festive-days');
        $festiveDays = json_decode($responseFestiveDays->body());

        $festiveBusinessesDays = BusinessFestiveDay::all();

        return view('components.tenant.working-day-holiday.festive-business-days-table',
                    compact('monthsArray', 'festiveDays', 'currentYear', 'festiveBusinessesDays'));
    }
}
