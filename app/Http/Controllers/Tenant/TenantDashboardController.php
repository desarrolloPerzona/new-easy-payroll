<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stancl\Tenancy\Middleware\InitializeTenancyByRequestData;

class TenantDashboardController extends Controller
{
    public function getDatabaseName()
    {
        $databaseName = \DB::connection()->getDatabaseName();

        return $databaseName;
    }

    public function dashboard(){
        $user = \Auth::user();
        InitializeTenancyByRequestData::$header = null;
        $db_name = $this::getDatabaseName();

        return view('tenant.dashboard.dashboard',compact('db_name','user'));
    }
}
