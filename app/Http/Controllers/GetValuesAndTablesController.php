<?php

namespace App\Http\Controllers;

use App\Models\IsnPayrollTax;
use App\Models\IsrRetention;
use App\Models\IsrSubsidy;
use App\Models\ReferenceValue;
use Illuminate\Http\Request;

class GetValuesAndTablesController extends Controller
{
    /**
     * REFERENCE VALUES
     */
    public function reference_values(): \Illuminate\Database\Eloquent\Collection|array
    {
        return ReferenceValue::all()->sortBy('isr_retention_type');
    }

    public function reference_values_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return ReferenceValue::where('year', $year)->get();
    }

    /**
     * ISR RETENTIONS
     */
    public function IsrRetentionsAll(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrRetention::all()->sortBy('isr_retention_type');
    }

    public function IsrRetentionsByYearAndType($year, $type): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrRetention::where('year', $year)->where('isr_retention_type',$type)->orderBy('lower_limit')->get();
    }

    /**
     * ISR SUBSIDIES
     */
    public function IsrSubsidiesAll(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrSubsidy::all()->sortBy('isr_subsidy_type');
    }

    public function IsrSubsidiesByYearAndType($year, $type): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrSubsidy::where('year', $year)->where('isr_subsidy_type',$type)->orderBy('income_from')->get();
    }


    /**
     * ISR PAYROLL TAXES
     */

    public function IsnPayrollTaxesAll(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsnPayrollTax::all()->sortBy('lower_limit');
    }

    public function IsnPayrollTaxesByState($state): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsnPayrollTax::where('state', $state)->orderBy('lower_limit')->get();
    }
}
