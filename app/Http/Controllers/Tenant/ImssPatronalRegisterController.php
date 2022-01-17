<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImssPatronalRegisterController extends Controller
{
    public function index()
    {
        return view('app-tenant.dashboard.employer-register.index');
    }

}
