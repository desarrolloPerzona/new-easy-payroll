<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\FiscalRegime;
use Illuminate\Http\Request;

class GetFiscalRegimesController extends Controller
{

    public function getFiscalRegimesList(){
        return FiscalRegime::all();
    }
}
