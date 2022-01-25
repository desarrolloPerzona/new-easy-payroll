<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\TemporaryFile;
use Illuminate\Http\Request;

class UploadFilesController extends Controller
{

    // Function to store in a temp folder files of business
    public function store(Request $request)
    {
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');



        }
    }

}
