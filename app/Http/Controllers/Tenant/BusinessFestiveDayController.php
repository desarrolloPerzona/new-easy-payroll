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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tenant\BusinessFestiveDay $businessFestiveDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessFestiveDay $businessFestiveDay)
    {
        //
    }
}
