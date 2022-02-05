<?php

namespace App\Http\Controllers;

use App\Models\IsrBiWeeklyRetention;
use App\Models\IsrBiWeeklyRetentionSubsidy;
use App\Models\IsrDailyRetention;
use App\Models\IsrDailyRetentionSubsidy;
use App\Models\IsrMonthlyRetention;
use App\Models\IsrMonthlyRetentionSubsidy;
use App\Models\IsrTenDaysRetention;
use App\Models\IsrTenDaysRetentionSubsidy;
use App\Models\IsrWeeklyRetention;
use App\Models\IsrWeeklyRetentionSubsidy;
use App\Models\ReferenceValue;
use Illuminate\Http\Request;

class GetIsrRetentionController extends Controller
{
    /**
     * REFERENCE VALUES
     */
    public function reference_values(): \Illuminate\Database\Eloquent\Collection|array
    {
        return ReferenceValue::all();
    }

    public function reference_values_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return ReferenceValue::where('year', $year)->get();
    }

    /**
     * DAILY RETENTIONS
     */
    public function daily_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrDailyRetention::all();
    }

    public function daily_retentions_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrDailyRetention::where('year', $year)->get();
    }

    public function daily_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrDailyRetentionSubsidy::all();
    }

    public function daily_retentions_subsidies_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrDailyRetentionSubsidy::where('year', $year)->get();
    }

    /**
     * MONTHLY RETENTIONS
     */
    public function monthly_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrmonthlyRetention::all();
    }

    public function monthly_retentions_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrmonthlyRetention::where('year', $year)->get();
    }

    public function monthly_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrmonthlyRetentionSubsidy::all();
    }

    public function monthly_retentions_subsidies_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrmonthlyRetentionSubsidy::where('year', $year)->get();
    }

    /**
     * TEN DAYS RETENTIONS
     */

    public function ten_days_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrTenDaysRetention::all();
    }

    public function ten_days_retentions_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrTenDaysRetention::where('year', $year)->get();
    }

    public function ten_days_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrTenDaysRetentionSubsidy::all();
    }

    public function ten_days_retentions_subsidies_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrTenDaysRetentionSubsidy::where('year', $year)->get();
    }

    /**
     * WEEKLY RETENTIONS
     */

    public function weekly_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrWeeklyRetention::all();
    }

    public function weekly_retentions_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrWeeklyRetention::where('year', $year)->get();
    }

    public function weekly_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrWeeklyRetentionSubsidy::all();
    }

    public function weekly_retentions_subsidies_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrWeeklyRetentionSubsidy::where('year', $year)->get();
    }

    /**
     * BIWEEKLY RETENTIONS
     */

    public function biweekly_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrBiWeeklyRetention::all();
    }

    public function biweekly_retentions_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrBiWeeklyRetention::where('year', $year)->get();
    }

    public function biweekly_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrBiWeeklyRetentionSubsidy::all();
    }

    public function biweekly_retentions_subsidies_by_year($year): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrBiWeeklyRetentionSubsidy::where('year', $year)->get();
    }
}
