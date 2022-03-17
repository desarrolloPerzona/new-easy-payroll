<?php

namespace App\View\Components\Tenant\TableValues;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class TaxesTables extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $appUrl = config('app.url');

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
        $stateVariables = array();

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

        foreach($names as $state){
            $newState = strtr(str_replace(' ', '', $state), $unwanted_array);
            ${"array$newState"} = array();

            foreach ($allIsn as $isnObject){
                if($isnObject->state == $state){
                    array_push(${"array$newState"}, $isnObject);
                }
            }
        }

        //  Getting variables names to show them in view
        foreach ($stateNames as $name){
            array_push($stateVariables, ('array'. $name));
        }

        return view('components.tenant.table-values.taxes-tables', compact([ [$stateVariables], 'names', 'stateVariables']));
    }
}
