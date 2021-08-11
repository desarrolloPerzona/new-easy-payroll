<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiscalRegimeController extends Controller
{
    public function index()
    {
        return view ('admin.fiscal-regime.index');
    }

}
