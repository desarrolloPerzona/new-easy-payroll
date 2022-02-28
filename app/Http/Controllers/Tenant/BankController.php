<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Tenant\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('app-tenant.dashboard.banks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $appUrl = config('app.url');
        $api_responseBanks = Http::withOptions(['verify' => false])->get($appUrl . '/api/bank-list/');
        $reference_values = json_decode($api_responseBanks->body());

        $banks = $reference_values;
        $businesses = Business::all();

        return view('app-tenant.dashboard.banks.create', compact('banks', 'businesses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:banks|max:50',
            'account_number' => 'required|unique:banks|max:24',
            'branch' => 'required',
            'business' => 'required',
            'description' => 'required|max:254',
            'information_number' => 'required|max:12',
            'branch_number' => 'required|max:12',
            'account_clabe' => 'required|unique:banks|max:18'
        ]);

        $bank = new Bank;

        $bank->name = $request->get('name');
        $bank->institutional_key = $request->get('institutional_key');
        $bank->branch = $request->get('branch');
        $bank->account_number = $request->get('account_number');
        $bank->account_number = $request->get('account_number');
        $bank->branch_number = $request->get('branch_number');
        $bank->account_clabe = $request->get('account_clabe');
        $bank->account_clabe = $request->get('account_clabe');
        $bank->information_number = $request->get('information_number');
        $bank->description = $request->get('description');

        $bank->save();

        return redirect()->route('banks.index')->with('message', 'create');
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
        return view('app-tenant.dashboard.banks.edit');
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
