<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\EmployerRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployerRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('app-tenant.dashboard.employer-register.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('app-tenant.dashboard.employer-register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('employer_register')->insert([
            'business_branch_id' => 1,
            'name' => $request->get('name'),
            'risk_premium' => $request->get('risk_premium'),
            'imss_sub_delegation_key' => $request->get('imss_sub_delegation_key'),
            'business_id' => 1,
        ]);

//        $employerRegister->business_branch_id = 1;
//        $employerRegister->name = $request->get('name');
//        $employerRegister->risk_premium = $request->get('risk_premium');
//        $employerRegister->imss_sub_delegation_key = $request->get('imss_sub_delegation_key');
//
//        $employerRegister->save();

        return redirect()->route('employer-register.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('app-tenant.dashboard.employer-register.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
