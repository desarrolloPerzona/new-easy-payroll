<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\WorkingDayHoliday;
use Illuminate\Http\Request;

class WorkingDayHolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tenant.dashboard.workingdayholiday.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenant\WorkingDayHoliday  $workingDayHoliday
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingDayHoliday $workingDayHoliday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant\WorkingDayHoliday  $workingDayHoliday
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkingDayHoliday $workingDayHoliday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenant\WorkingDayHoliday  $workingDayHoliday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkingDayHoliday $workingDayHoliday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant\WorkingDayHoliday  $workingDayHoliday
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingDayHoliday $workingDayHoliday)
    {
        //
    }
}
