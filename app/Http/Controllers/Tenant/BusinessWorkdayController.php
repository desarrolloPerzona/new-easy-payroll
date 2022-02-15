<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessWorkdayRequest;
use App\Http\Requests\UpdateBusinessWorkdayRequest;
use App\Models\Tenant\BusinessWorkday;

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
     * @param  \App\Http\Requests\StoreBusinessWorkdayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessWorkdayRequest $request)
    {
        //
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
