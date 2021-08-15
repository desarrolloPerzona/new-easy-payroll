<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class GetBanksController extends Controller
{

    public function getBankList(){
        return Bank::all();
    }
}
