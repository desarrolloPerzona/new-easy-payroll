<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessWorkdayRequest;
use App\Http\Requests\UpdateBusinessWorkdayRequest;
use App\Models\Tenant\BusinessWorkday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessWorkdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $daysArray = [
            'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'
        ];

        $workingDay = new BusinessWorkday;

        $workingDay->name = $request->get('name');
        $workingDay->workday_type = $request->get('workday_type');

        foreach ($daysArray as $key => $day){
            if($request->get($day)){
                $workingDay[$day] = $request->get($day);
            } else{
                $workingDay[$day] = 0;
            }

            $workingDay[$day . "_from"] = $request->get($day . "_from");
            $workingDay[$day . "_to"] = $request->get($day . "_to");
        }

        if($request->get('meal_time')){
            $workingDay->meal_time = $request->get('meal_time');
        } else{
            $workingDay->meal_time = 0;
        }

        $workingDay->meal_time_from = $request->get('meal_time_from');
        $workingDay->meal_time_to = $request->get('meal_time_to');

        $workingDay->save();

        return redirect()->route('working-day-holiday.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenant\BusinessWorkday  $businessWorkday
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessWorkday $businessWorkday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant\BusinessWorkday  $businessWorkday
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessWorkday $businessWorkday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessWorkdayRequest  $request
     * @param  \App\Models\Tenant\BusinessWorkday  $businessWorkday
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessWorkdayRequest $request, BusinessWorkday $businessWorkday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant\BusinessWorkday  $businessWorkday
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessWorkday $businessWorkday)
    {
        //
    }
}
