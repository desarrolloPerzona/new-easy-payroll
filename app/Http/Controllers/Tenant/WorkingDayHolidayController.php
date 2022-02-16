<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\BusinessWorkday;
use App\Models\Tenant\WorkingDayHoliday;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkingDayHolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $daysArray = [
            'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
        ];

        $workDays = BusinessWorkday::all();

        return view('app-tenant.dashboard.working-day-holiday.index', compact('daysArray', 'workDays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app-tenant.dashboard.working-day-holiday.create');
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
     * @param \App\Models\Tenant\WorkingDayHoliday $workingDayHoliday
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingDayHoliday $workingDayHoliday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tenant\WorkingDayHoliday $workingDayHoliday
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('app-tenant.dashboard.working-day-holiday.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tenant\WorkingDayHoliday $workingDayHoliday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkingDayHoliday $workingDayHoliday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tenant\WorkingDayHoliday $workingDayHoliday
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingDayHoliday $workingDayHoliday)
    {
        //
    }
}
