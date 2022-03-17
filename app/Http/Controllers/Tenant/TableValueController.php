<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant\TableValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TableValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $currentYear = date('Y');
        $appUrl = config('app.url');

        /**
         * ISN
         */

//        All
        $api_responseIsn = Http::withOptions(['verify' => false])->get($appUrl .'/api/isn-payroll-taxes-all');
        $allIsn = json_decode($api_responseIsn->body());

//        Characters to remove of state names
        $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

        $names = array();
        $stateNames = array();

//        Getting state names
        foreach ($allIsn as $value){
            if(!in_array($value->state, $stateNames)){
                array_push($stateNames, strtr(str_replace(' ', '', $value->state), $unwanted_array));
            }
        }

        //        Getting state names
        foreach ($allIsn as $value){
            if(!in_array($value->state, $names)){
                array_push($names,  $value->state);
            }
        }

//        Loop to create a response for each state in our array
        foreach ($stateNames as $key => $value){
                $response = Http::withOptions(['verify' => false])->get($appUrl .'/api/isn-payroll-taxes/' . $currentYear . '/' . $names[$key]);
                ${"array$value"} = json_decode($response->body());

        }

//        Getting variables names to show them in view
        $stateVariables = array();

        foreach ($stateNames as $name){
            array_push($stateVariables, ('array'. $name));
        }

        return view('app-tenant.dashboard.table-value.index', compact(
            [
                // ISN Variables
                'stateVariables', 'stateNames', 'names'
            ],[
                $stateVariables
            ]
        ));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tenant\TableValue $tableValue
     * @return \Illuminate\Http\Response
     */
    public function show(TableValue $tableValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tenant\TableValue $tableValue
     * @return \Illuminate\Http\Response
     */
    public function edit(TableValue $tableValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tenant\TableValue $tableValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableValue $tableValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tenant\TableValue $tableValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableValue $tableValue)
    {
        //
    }
}
