<?php

namespace App\Http\Controllers;

use App\Models\OfficialFestiveDay;
use Illuminate\Http\Request;

class ApiLandlordController extends Controller
{
    public function officialFestiveDays(){
        return OfficialFestiveDay::all()->sortBy('date');
    }
}
