<?php

namespace App\Http\Controllers;

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
    public function reference_values(): \Illuminate\Database\Eloquent\Collection|array
    {
        return ReferenceValue::all();
    }

    public function daily_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrDailyRetention::all();
    }

    public function daily_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrDailyRetentionSubsidy::all();
    }

    public function monthly_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrmonthlyRetention::all();
    }

    public function monthly_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrmonthlyRetentionSubsidy::all();
    }

    public function ten_days_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrTenDaysRetention::all();
    }

    public function ten_days_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrTenDaysRetentionSubsidy::all();
    }

    public function weekly_retentions(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrWeeklyRetention::all();
    }

    public function weekly_retentions_subsidies(): \Illuminate\Database\Eloquent\Collection|array
    {
        return IsrWeeklyRetentionSubsidy::all();
    }
}
