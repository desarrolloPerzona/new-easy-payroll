<?php

namespace App\View\Components\Tenant\TableValues;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class IsrPeriodicRetentions extends Component
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
        $currentYear = date('Y');
        $appUrl = config('app.url');

        /**
         * Daily Retentions BY YEAR ISR
         */
        $api_responseDailyR = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-retentions/' . $currentYear . '/daily');
        $dailyRetentions = json_decode($api_responseDailyR->body());

        /**
         * Weekly Retentions ISR
         */

        $api_responseWeeklyR = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-retentions/' . $currentYear . '/weekly');
        $weeklyRetentions = json_decode($api_responseWeeklyR->body());

        /**
         * Ten days Retentions ISR
         */
        $api_responseTenDaysR = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-retentions/' . $currentYear . '/ten days');
        $tenDaysRetentions = json_decode($api_responseTenDaysR->body());

        /**
         * Biweekly Retentions ISR
         */
        $api_responseBiWeeklyR = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-retentions/' . $currentYear . '/biweekly');
        $biweeklyRetentions = json_decode($api_responseBiWeeklyR->body());

        /**
         * Monthly Retentions ISR
         */
        $api_responseMonthlyR = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-retentions/' . $currentYear . '/monthly');
        $monthlyRetentions = json_decode($api_responseMonthlyR->body());

        return view('components.tenant.table-values.isr-periodic-retentions',
                compact('dailyRetentions', 'weeklyRetentions', 'tenDaysRetentions', 'biweeklyRetentions', 'monthlyRetentions'));

    }
}
