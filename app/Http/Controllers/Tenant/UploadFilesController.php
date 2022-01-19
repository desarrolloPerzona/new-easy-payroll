<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadFilesController extends Controller
{
    public function uploadFile(Request $request)
    {

//        Check if has file, this to store it in temporaryfiles db
        if($request->hasFile('fiel_private_key')){
            $file = $request->file('fiel_private_key');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;

            $file->storeAs('public/business/fielKeys/tmp/' . $folder, $filename);

            return $folder;
        }

//        if($request->hasFile('fiel_cert')){
//            $file = $request->file('fiel_cert');
//            $filename = $file->getClientOriginalName();
//            $folder = uniqid() . '-' . now()->timestamp;
//
//            $file->storeAs('public/business/fielCerts/tmp/' . $folder, $filename);
//
//            return $folder;
//        }

        return '';

    }

}
