<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;

class GetFiscalIndustriesController extends Controller
{
    //

    public function getFiscalIndustriesList()
    {
        return Industry::all();
    }
}
