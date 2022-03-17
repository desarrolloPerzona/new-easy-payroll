<?php

namespace App\View\Components\Tenant\TableValues;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class SubsidiesTables extends Component
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
         * Daily
         */
        $api_resSubsidyDaily = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-subsidies/' . $currentYear . '/daily');
        $dailySubsidies = json_decode($api_resSubsidyDaily->body());

        /**
         * Weekly
         */
        $api_resSubsidyWeekly = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-subsidies/' . $currentYear . '/weekly');
        $weeklySubsidies = json_decode($api_resSubsidyWeekly->body());

        /**
         * Ten days
         */
        $api_resSubsidyTenDays = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-subsidies/' . $currentYear . '/ten days');
        $tenDaysSubsidies = json_decode($api_resSubsidyTenDays->body());

        /**
         * Biweekly
         */
        $api_resSubsidyBiweekly = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-subsidies/' . $currentYear . '/biweekly');
        $biweeklySubsidies = json_decode($api_resSubsidyBiweekly->body());

        /**
         * Monthly
         */
        $api_resSubsidyMonthly = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-subsidies/' . $currentYear . '/monthly');
        $monthlySubsidies = json_decode($api_resSubsidyMonthly->body());

        return view('components.tenant.table-values.subsidies-tables',
                compact('dailySubsidies', 'weeklySubsidies', 'tenDaysSubsidies', 'biweeklySubsidies', 'monthlySubsidies'));

    }
}
