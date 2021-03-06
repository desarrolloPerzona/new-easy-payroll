<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\BusinessPosition;
use Illuminate\Http\Request;

class BusinessPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('app-tenant.dashboard.business-positions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('app-tenant.dashboard.business-positions.create');
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
     * @param  \App\Models\Tenant\BusinessPosition  $businessPosition
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('app-tenant.dashboard.business-positions.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant\BusinessPosition  $businessPosition
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('app-tenant.dashboard.business-positions.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenant\BusinessPosition  $businessPosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessPosition $businessPosition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant\BusinessPosition  $businessPosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessPosition $businessPosition)
    {
        //
    }
}
