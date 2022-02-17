<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\BusinessWorkday;
use App\Models\Tenant\WorkingDayHoliday;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WorkingDayHolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $appUrl = config('app.url');

        $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        $monthsArray = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        $workdayTypes = ['diurno', 'nocturno', 'mixto'];

        $workDays = BusinessWorkday::all();

//        Get festive official days from API
        $responseFestiveDays = Http::withOptions(['verify' => false])->get($appUrl .'/api/official-festive-days');
        $festiveDays = json_decode($responseFestiveDays->body());

        return view('app-tenant.dashboard.working-day-holiday.index',
                compact('daysArray', 'monthsArray', 'festiveDays', 'workDays', 'workdayTypes'));
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
