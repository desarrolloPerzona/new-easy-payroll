<?php

use App\Http\Controllers\Api\GetBanksController;
use App\Http\Controllers\Api\GetFiscalIndustriesController;
use App\Http\Controllers\Api\GetFiscalRegimesController;
use App\Http\Controllers\Api\GetZipcodeController;
use App\Http\Controllers\GetIsrRetentionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// PUBLIC API ROUTES

Route::group(['api' => 'api'], function(){
    /**
     * ZIP CODES
     */
    Route::get('/zipcode',[GetZipcodeController::class,'getZipCode']);
    Route::get('/zipcode/search/{name}',[GetZipcodeController::class,'searchZipcode']);
    /**
     * BANKS
     */
    Route::get('/bank-list',[GetBanksController::class,'getBankList']);
    /**
     * FISCAL REGIMES
     */
    Route::get('/fiscal-regimes-list',[GetFiscalRegimesController::class,'getFiscalRegimesList']);
    /**
     * FISCAL INDUSTRIES
     */
    Route::get('/fiscal-industries-list',[GetFiscalIndustriesController::class,'getFiscalIndustriesList']);
    /**
     * DAILY RETENTIONS
     */
    Route::get('/isr-daily-retentions',[GetIsrRetentionController::class,'daily_retentions']);
    Route::get('/isr-daily-retentions-subsidies',[GetIsrRetentionController::class,'daily_retentions_subsidies']);
    Route::get('/isr-daily-retentions/{year}',[GetIsrRetentionController::class,'daily_retentions_by_year']);
    Route::get('/isr-daily-retentions-subsidies/{year}',[GetIsrRetentionController::class,'daily_retentions_subsidies_by_year']);
    /**
     * MONTHLY RETENTIONS
     */
    Route::get('/isr-monthly-retentions',[GetIsrRetentionController::class,'monthly_retentions']);
    Route::get('/isr-monthly-retentions-subsidies',[GetIsrRetentionController::class,'monthly_retentions_subsidies']);
    Route::get('/isr-monthly-retentions/{year}',[GetIsrRetentionController::class,'monthly_retentions_by_year']);
    Route::get('/isr-monthly-retentions-subsidies/{year}',[GetIsrRetentionController::class,'monthly_retentions_subsidies_by_year']);
    /**
     * TEN DAY RETENTIONS
     */
    Route::get('/isr-ten-days-retentions',[GetIsrRetentionController::class,'ten_days_retentions']);
    Route::get('/isr-ten-days-retentions-subsidies',[GetIsrRetentionController::class,'ten_days_retentions_subsidies']);
    Route::get('/isr-ten-days-retentions/{year}',[GetIsrRetentionController::class,'ten_days_retentions_by_year']);
    Route::get('/isr-ten-days-retentions-subsidies/{year}',[GetIsrRetentionController::class,'ten_days_retentions_subsidies_by_year']);
    /**
     * TEN WEEKLY RETENTIONS
     */
    Route::get('/isr-weekly-retentions',[GetIsrRetentionController::class,'weekly_retentions']);
    Route::get('/isr-weekly-retentions/{year}',[GetIsrRetentionController::class,'weekly_retentions_by_year']);
    Route::get('/isr-weekly-retentions-subsidies',[GetIsrRetentionController::class,'weekly_retentions_subsidies']);
    Route::get('/isr-weekly-retentions-subsidies/{year}',[GetIsrRetentionController::class,'weekly_retentions_subsidies_by_year']);
    /**
     * BIWEEKLY RETENTIONS
     */
    Route::get('/isr-biweekly-retentions',[GetIsrRetentionController::class,'biweekly_retentions']);
    Route::get('/isr-biweekly-retentions/{year}',[GetIsrRetentionController::class,'biweekly_retentions_by_year']);
    Route::get('/isr-biweekly-retentions-subsidies',[GetIsrRetentionController::class,'biweekly_retentions_subsidies']);
    Route::get('/isr-biweekly-retentions-subsidies/{year}',[GetIsrRetentionController::class,'biweekly_retentions_subsidies_by_year']);
    /**
     * TEN REFERENCE VALUES
     */
    Route::get('/reference-values',[GetIsrRetentionController::class,'reference_values']);
    Route::get('/reference-values/{year}',[GetIsrRetentionController::class,'reference_values_by_year']);
});

