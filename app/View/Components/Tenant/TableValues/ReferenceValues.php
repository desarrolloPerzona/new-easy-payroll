<?php

namespace App\View\Components\Tenant\TableValues;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class ReferenceValues extends Component
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
        $currentYear = date('Y');

        $appUrl = config('app.url');
        $api_responseRV = Http::withOptions(['verify' => false])->get($appUrl . '/api/reference-values/' . $currentYear);
        $reference_values = json_decode($api_responseRV->body());

        $discount_infonavit = $reference_values[0];
        $uma = $reference_values[1];
        $minimum_salary_general = $reference_values[2];
        $minimum_salary_border = $reference_values[3];

        return view('components.tenant.table-values.reference-values',
                compact('discount_infonavit', 'uma', 'minimum_salary_general', 'minimum_salary_border'));
    }
}
