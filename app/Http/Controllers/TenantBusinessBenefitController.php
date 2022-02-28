<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTenantBusinessBenefitRequest;
use App\Http\Requests\UpdateTenantBusinessBenefitRequest;
use App\Models\TenantBusinessBenefit;

class TenantBusinessBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $benefits = TenantBusinessBenefit::all();
        return view('app-landlord.dashboard.tenant-business-benefits.index',compact('benefits'));
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
     * @param  \App\Http\Requests\StoreTenantBusinessBenefitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTenantBusinessBenefitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TenantBusinessBenefit  $tenantBusinessBenefit
     * @return \Illuminate\Http\Response
     */
    public function show(TenantBusinessBenefit $tenantBusinessBenefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TenantBusinessBenefit  $tenantBusinessBenefit
     * @return \Illuminate\Http\Response
     */
    public function edit(TenantBusinessBenefit $tenantBusinessBenefit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTenantBusinessBenefitRequest  $request
     * @param  \App\Models\TenantBusinessBenefit  $tenantBusinessBenefit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTenantBusinessBenefitRequest $request, TenantBusinessBenefit $tenantBusinessBenefit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TenantBusinessBenefit  $tenantBusinessBenefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenantBusinessBenefit $tenantBusinessBenefit)
    {
        //
    }
}
