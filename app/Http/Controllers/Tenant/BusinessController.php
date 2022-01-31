<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Http;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = Business::all();
        return view('app-tenant.dashboard.business.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */


    public function create()
    {
        $appUrl = 'https://perzona-dev.net/';
        $api_responseFR = Http::get($appUrl . 'api/fiscal-regimes-list');
        $fiscal_regimes = json_decode($api_responseFR->body());
        $api_responseIL = Http::get($appUrl . 'api/fiscal-industries-list');
        $fiscal_industries = json_decode($api_responseIL->body());
        return view('app-tenant.dashboard.business.create', compact('fiscal_regimes', 'fiscal_industries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Business $business, Request $request)
    {


        $business = Business::create([
            'name' => $request->name,
        ]);

        //$business->addMedia(storage_path('app/public/temp/'.$request->logo))

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tenant\Business $business
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        $business = Business::find($business->id);


        return view('app-tenant.dashboard.business.show', compact('business'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tenant\Business $business
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Business $business)
    {
        $business = Business::find($business->id);
        return view('app-tenant.dashboard.business.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tenant\Business $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

//        $business = Business::find($request->id);
//        $business->update([
//
//        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tenant\Business $business
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business = Business::find($id);
        $business->delete();
    }

    public function updateStpStatus(Request $request, Business $business)
    {
        $business->update([
            'stp_status' => 1,
        ]);

        return redirect()->route('business.index');
    }

//    public function updateByField(Request $request)
//    {
//        $business = Business::find($request->id);
//        $business->update([
////TODO::terminar el metodo
//        ]);
//    }
}
