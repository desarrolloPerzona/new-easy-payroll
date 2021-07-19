<?php

namespace App\Http\Controllers;

use App\Models\Tenant\Business;
use Illuminate\Http\Request;

class TenantWelcomeController extends Controller
{
    public function index(){
        $db_name = $this::getDatabaseName();
        $business = Business::find(1);


        return view('tenant.index',compact('db_name','business'));
    }


    public function getDatabaseName()
    {
        $databaseName = \DB::connection()->getDatabaseName();

        return $databaseName;
    }
}
