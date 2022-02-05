<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FiscalRegime;
use Illuminate\Http\Request;

class GetFiscalRegimesController extends Controller
{
    public function getFiscalRegimesList($year){
        return FiscalRegime::all();
    }
    public function getFiscalRegimesListByYear($year){
        return FiscalRegime::where('year',$year)->get();
    }
}
