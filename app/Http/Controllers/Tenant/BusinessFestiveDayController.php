<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessFestiveDayRequest;
use App\Http\Requests\UpdateBusinessFestiveDayRequest;
use App\Models\Tenant\BusinessFestiveDay;
use Illuminate\Http\Request;

class BusinessFestiveDayController extends Controller
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
        $request->validate([
            'name' => 'required|unique:business_festive_days'
        ]);

        $businessFestiveday = new BusinessFestiveDay();
        $businessFestiveday->name = $request->get('name');
        $businessFestiveday->date = $request->get('date');

        if ($request->get('working') == 1) {
            $businessFestiveday->working = $request->get('working');
            if ($request->get('schedule_all_day') == 0) {
                $businessFestiveday->schedule_from = $request->get('schedule_from');
                $businessFestiveday->schedule_to = $request->get('schedule_to');
            }
            $businessFestiveday->schedule_all_day = $request->get('schedule_all_day');
        }

        $businessFestiveday->created_at = now();
        $businessFestiveday->updated_at = now();

        $businessFestiveday->save();

        return redirect()->back()->with('create', 'Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tenant\BusinessFestiveDay $businessFestiveDay
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessFestiveDay $businessFestiveDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tenant\BusinessFestiveDay $businessFestiveDay
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessFestiveDay $businessFestiveDay)
    {
        return view('app-tenant.dashboard.working-day-holiday.edit', compact('businessFestiveDay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBusinessFestiveDayRequest $request
     * @param \App\Models\Tenant\BusinessFestiveDay $businessFestiveDay
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessFestiveDay $businessFestiveDay, Request $request)
    {

        if ($request->get('name') != $businessFestiveDay->name) {

            $request->validate([
                'name' => 'unique:business_festive_days'
            ]);
            $businessFestiveDay->name = $request->get('name');
        }

        $businessFestiveDay->date = $request->get('date');
        if ($request->get('working') == 1) {
            $businessFestiveDay->working = 1;
            if ($request->get('schedule_all_day') == 0) {
                $businessFestiveDay->schedule_from = $request->get('schedule_from');
                $businessFestiveDay->schedule_to = $request->get('schedule_to');
            }
            $businessFestiveDay->schedule_all_day = $request->get('schedule_all_day');
        } else{
            $businessFestiveDay->working = 0;
            $businessFestiveDay->schedule_all_day = 0;
            $businessFestiveDay->schedule_from = null;
            $businessFestiveDay->schedule_to = null;
        }

        $businessFestiveDay->created_at = now();
        $businessFestiveDay->updated_at = now();


        $businessFestiveDay->save();

        return redirect()->route('working-day-holiday.index')->with('edit', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tenant\BusinessFestiveDay $businessFestiveDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessFestiveDay $businessFestiveDay)
    {
        $businessFestiveDay->delete();
        return redirect()->route('working-day-holiday.index')->with('delete', 'Record deleted successfully');
    }
}
