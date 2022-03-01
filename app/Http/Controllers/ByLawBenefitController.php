<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreByLawBenefitRequest;
use App\Http\Requests\UpdateByLawBenefitRequest;
use App\Models\ByLawBenefit;

class ByLawBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $benefits = ByLawBenefit::all();
        return view('app-landlord.dashboard.by-law-benefits.index',compact('benefits'));
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
     * @param  \App\Http\Requests\StoreByLawBenefitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreByLawBenefitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ByLawBenefit  $byLawBenefit
     * @return \Illuminate\Http\Response
     */
    public function show(ByLawBenefit $byLawBenefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ByLawBenefit  $byLawBenefit
     * @return \Illuminate\Http\Response
     */
    public function edit(ByLawBenefit $byLawBenefit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateByLawBenefitRequest  $request
     * @param  \App\Models\ByLawBenefit  $byLawBenefit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateByLawBenefitRequest $request, ByLawBenefit $byLawBenefit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ByLawBenefit  $byLawBenefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ByLawBenefit $byLawBenefit)
    {
        //
    }
}
