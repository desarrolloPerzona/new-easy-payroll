<?php

use App\Http\Controllers\Api\GetBanksController;
use App\Http\Controllers\Api\GetFiscalIndustriesController;
use App\Http\Controllers\Api\GetFiscalRegimesController;
use App\Http\Controllers\Api\GetZipcodeController;
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
Route::get('/zipcode',[GetZipcodeController::class,'getZipCode']);
Route::get('/zipcode/search/{name}',[GetZipcodeController::class,'searchZipcode']);
Route::get('/bank-list',[GetBanksController::class,'getBankList']);
Route::get('/fiscal-regimes-list',[GetFiscalRegimesController::class,'getFiscalRegimesList']);
Route::get('/fiscal-industries-list',[GetFiscalIndustriesController::class,'getFiscalIndustriesList']);


// PROTECTED ROUTES
Route::group(['middleware' => 'auth:sanctum'], function(){

});

