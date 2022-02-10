<?php

use App\Http\Controllers\Api\GetBanksController;
use App\Http\Controllers\Api\GetFiscalIndustriesController;
use App\Http\Controllers\Api\GetFiscalRegimesController;
use App\Http\Controllers\Api\GetZipcodeController;
use App\Http\Controllers\GetIsrRetentionController;
use App\Http\Controllers\GetValuesAndTablesController;
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
     *  RETENTIONS
     */
    Route::get('/isr-retentions-all',[GetValuesAndTablesController::class,'IsrRetentionsAll']);
    Route::get('/isr-retentions/{year}/{type}',[GetValuesAndTablesController::class,'IsrRetentionsByYearAndType']);
    /**
     * SUBSIDIES
     */
    Route::get('/isr-subsidies-all',[GetValuesAndTablesController::class,'IsrSubsidiesAll']);
    Route::get('/isr-subsidies/{year}/{type}',[GetValuesAndTablesController::class,'IsrSubsidiesByYearAndType']);

    /**
     * TEN REFERENCE VALUES
     */
    Route::get('/reference-values',[GetValuesAndTablesController::class,'reference_values']);
    Route::get('/reference-values/{year}',[GetValuesAndTablesController::class,'reference_values_by_year']);
});

