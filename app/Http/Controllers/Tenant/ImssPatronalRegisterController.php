<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant\ImssPatronalRegister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ImssPatronalRegisterController extends Controller
{
    public function index()
    {
        return view('app-tenant.dashboard.imss-employer-register.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('app-tenant.dashboard.imss-employer-register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3'
        ]);

        $register = new ImssPatronalRegister;

        $register->branch_id = $request->get('branch_id');
        $register->fiel_id = 1;
        $register->name = $request->get('name');
        $register->risk_premium = $request->get('risk_premium');
        $register->imss_sub_delegation_key = $request->get('imss_sub_delegation_key');

//        Conditional in radio button, if press IMSS saves IMSS values, else save FIEL values
        if($request->get('use_imss') == 1){
            $register->cert_imss_cert = $request->get('cert_imss_cert');
            $register->cert_imss_user = $request->get('cert_imss_user');
            $register->cert_imss_password = Hash::make($request->get('cert_imss_password'));
        }

        $register->save();

        return redirect()->route('imss-employer-registers.index');

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
        return view('app-tenant.dashboard.imss-employer-register.edit', compact('id'));
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
