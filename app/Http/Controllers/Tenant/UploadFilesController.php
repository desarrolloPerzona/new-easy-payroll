<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\TemporaryFile;
use Illuminate\Http\Request;

class UploadFilesController extends Controller
{

    // Function to store in a temp folder files of business
    public function uploadFile(Request $request){


        $allReq = $request->all();

//        Loop to store in db file and save data in temporary table
        foreach ($allReq as $key => $req){
            if($request->hasFile($key)){
                $file = $request->file($key);
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . now()->timestamp;

                $file->storeAs('tmp/' . $folder, $filename);

                TemporaryFile::create([
                    'folder' => $folder,
                    'filename' => $filename
                ]);
                return $folder;
            }
        }
        return '';

//        Check if has file, this to store it in temporaryfiles db
        /*if($request->hasFile('fiel_cert')){
            $file = $request->file('fiel_cert');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;

            $file->storeAs('public/business/tmp/' . $folder, $filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return $folder;
        }

        return '';*/

    }

}
