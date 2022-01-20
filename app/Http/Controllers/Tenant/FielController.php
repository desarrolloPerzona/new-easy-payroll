<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\Fiel;
use App\Models\Tenant\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $fiels = Fiel::all();
        return view('app-tenant.dashboard.fiel.index',compact('fiels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

//        Getting the name that filepond assing to the file
        $chunks = explode('<', $request->get('fiel_private_key'));
        $file = $chunks[0];

//        Saving data
        $fiel = new Fiel;

        $fiel->name = $request->get('name');
        $fiel->fiel_private_key = $file;
        $fiel->fiel_password = Hash::make($request->get('fiel_password'));

        $fiel->save();

        $temporaryFile = TemporaryFile::where('folder', $file)->first();
//        $allTemps = TemporaryFile::all();

        if($temporaryFile){
            $fiel->addMedia(storage_path('app/public/business/tmp/' . $file . '/' . $temporaryFile->filename))
                ->toMediaCollection('fiel_private_key');

//            Function to delete folder after save all data
            rmdir(storage_path('app/public/business/tmp/' . $file));
            $temporaryFile->delete();
        }

        $allTemps = TemporaryFile::all();
//            Loop to delete all items and folders of business_temp that create filepond by default
        foreach ($allTemps as $item){
            deleteDirectory(storage_path('app/public/business/tmp/' . $item->folder));
            $item->delete();
        }

        return redirect()->route('fiel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
