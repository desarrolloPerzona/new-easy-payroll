<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\TemporaryFile;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Conversions\ImageGenerators\Image;

class UploadFilesController extends Controller
{

    /*Function to store in a temp folder files of business*/
    public function store(Request $request)
    {


        $allReq = $request->all();

        /*Loop to store in db file and save data in temporary table*/
        foreach ($allReq as $key => $req) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . now()->timestamp;
                $file->storeAs('temp/' . $folder, $filename);


                TemporaryFile::create([
                    'folder' => $folder,
                    'filename' => $filename
                ]);

                return $folder;
            }
        }
        return '';
    }

}
