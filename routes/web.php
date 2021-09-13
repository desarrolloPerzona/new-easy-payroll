<?php

use App\Events\TenantHasSubscribe;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientDashboardController;
use App\Http\Controllers\FiscalRegimeController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ZipCodeController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    TenantHasSubscribe::dispatch();
    return view('welcome');
})->name('landingPage');


// ADMINISTRATION //


Route::group(['middleware' =>  'web'], function () {

    Route::group(['prefix' => 'admin', 'middleware' => 'is_admin', 'as' => 'admin.'], function () {

        Route::get('/', [AdminDashboardController::class, 'index'])->middleware(['auth:sanctum', 'verified', 'universal', InitializeTenancyByDomain::class])->name('adminDashboard');

        Route::resource('/roles', RoleController::class);

        Route::resource('/permissions', PermissionController::class);

        route::resource('/banks', BankController::class);

        route::resource('/fiscal-regimes', FiscalRegimeController::class);

        route::resource('/industries', IndustryController::class);

        route::resource('/zipcodes', ZipCodeController::class);
        

    });


    Route::group(['prefix' => 'client', 'as' => 'client.','middleware' => 'is_client'], function () {
        Route::get('/', [ClientDashboardController::class, 'index'])->middleware(['auth:sanctum', 'verified', 'universal', InitializeTenancyByDomain::class])->name('clientDashboard');
    });

});




