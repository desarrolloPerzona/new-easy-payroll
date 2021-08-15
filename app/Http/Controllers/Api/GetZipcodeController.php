<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ZipCode;
use Illuminate\Http\Request;

class GetZipcodeController extends Controller
{
    public function getZipCode(Request $request)
    {
        return ZipCode::where('zip_code',$request->zipcode)->get();
    }


    /**
     * SEARH ZIPCODES
     * @param Request $request
     * @return mixed
     */

    public function searchZipcode($name)
    {
    return ZipCode::where('zip_code','like',$name.'%')->get();
    }
}
