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
     * @param \App\Models\Tenant\BusinessWorkday $businessWorkday
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessWorkday $businessWorkday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $businessWorkday = BusinessWorkday::find($id);
        return view('app-tenant.dashboard.business-workday.edit', compact('businessWorkday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBusinessWorkdayRequest $request
     * @param \App\Models\Tenant\BusinessWorkday $businessWorkday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $daysArray = [
            'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'
        ];

        $businessWorkday = BusinessWorkday::find($id);

        //        Conditional to add a unique name validation and if it has change update field
        if ($request->get('name') != $businessWorkday->name) {
            $request->validate([
                'name' => 'unique:business_workdays'
            ]);
            $businessWorkday->name = $request->get('name');
        }

        $businessWorkday->workday_type = $request->get('workday_type');

        //        Storing each value of days array in front
        foreach ($daysArray as $key => $day) {
            if ($request->get($day)) {
                $businessWorkday[$day] = $request->get($day);
                $businessWorkday[$day . "_from"] = $request->get($day . "_from");
                $businessWorkday[$day . "_to"] = $request->get($day . "_to");
            }
        }

        if ($request->get('meal_time')) {
            $businessWorkday->meal_time = $request->get('meal_time');
            $businessWorkday->meal_time_from = $request->get('meal_time_from');
            $businessWorkday->meal_time_to = $request->get('meal_time_to');
        }

        $businessWorkday->save();

        return redirect()->route('working-day-holiday.index')->with('message', 'edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tenant\BusinessWorkday $businessWorkday
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
