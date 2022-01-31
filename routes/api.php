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

// PUBLIC ROUTES



// PROTECTED ROUTES
Route::group(['api' => 'api'], function(){
    Route::get('/zipcode',[GetZipcodeController::class,'getZipCode']);
    Route::get('/zipcode/search/{name}',[GetZipcodeController::class,'searchZipcode']);
    Route::get('/bank-list',[GetBanksController::class,'getBankList']);
    Route::get('/fiscal-regimes-list',[GetFiscalRegimesController::class,'getFiscalRegimesList']);
    Route::get('/fiscal-industries-list',[GetFiscalIndustriesController::class,'getFiscalIndustriesList']);
    Route::get('/isr-daily-retentions',[GetIsrRetentionController::class,'daily_retentions']);
    Route::get('/isr-daily-retentions-subsidies',[GetIsrRetentionController::class,'daily_retentions_subsidies']);
    Route::get('/isr-monthly-retentions',[GetIsrRetentionController::class,'monthly_retentions']);
    Route::get('/isr-monthly-retentions-subsidies',[GetIsrRetentionController::class,'monthly_retentions_subsidies']);
    Route::get('/isr-ten-days-retentions',[GetIsrRetentionController::class,'ten_days_retentions']);
    Route::get('/isr-ten-days-retentions-subsidies',[GetIsrRetentionController::class,'ten_days_retentions_subsidies']);
    Route::get('/isr-weekly-retentions',[GetIsrRetentionController::class,'weekly_retentions']);
    Route::get('/isr-weekly-retentions-subsidies',[GetIsrRetentionController::class,'weekly_retentions_subsidies']);
    Route::get('/reference-values',[GetIsrRetentionController::class,'reference_values']);


});

