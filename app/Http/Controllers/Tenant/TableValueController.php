<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\TableValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TableValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $currentYear = date('Y');

        $appUrl = config('app.url');
        $api_responseRV = Http::withOptions(['verify' => false])->get($appUrl . '/api/reference-values/' . $currentYear);
        $reference_values = json_decode($api_responseRV->body());

        $discount_infonavit = $reference_values[0];
        $uma = $reference_values[1];
        $minimum_salary_general = $reference_values[2];
        $minimum_salary_border = $reference_values[3];

        /**
         * Retentions ISR
         */

        /**
         * Daily Retentions ISR ALL
         */

        //$api_responseDailyR = Http::get($appUrl . 'api/isr-daily-retentions');
        //$dailyRetentions = json_decode($api_responseDailyR->body());

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

        /**
         * SUBSIDIES
         */

        /**
         * Daily
         */
        $api_resSubsidyDaily = Http::withOptions(['verify' => false])->get($appUrl .'/api/isr-subsidies/' . $currentYear . '/daily');
        $dailySubsidies = json_decode($api_resSubsidyDaily->body());


        return view('app-tenant.dashboard.table-value.index', compact('discount_infonavit', 'uma', 'minimum_salary_general', 'minimum_salary_border',
            'dailyRetentions', 'weeklyRetentions', 'tenDaysRetentions', 'biweeklyRetentions', 'monthlyRetentions',
            'dailySubsidies'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tenant\TableValue $tableValue
     * @return \Illuminate\Http\Response
     */
    public function show(TableValue $tableValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tenant\TableValue $tableValue
     * @return \Illuminate\Http\Response
     */
    public function edit(TableValue $tableValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tenant\TableValue $tableValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableValue $tableValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tenant\TableValue $tableValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableValue $tableValue)
    {
        //
    }
}
