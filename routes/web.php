<?php

use App\Events\TenantHasSubscribe;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FiscalRegimeController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth:sanctum', 'verified', 'universal', InitializeTenancyByDomain::class])->name('dashboard');
Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->middleware(['auth:sanctum', 'verified', 'universal', InitializeTenancyByDomain::class])->name('adminDashboard');


// ADMINISTRATION //




Route::resource('/roles',RoleController::class)->middleware(['auth:sanctum', 'verified', 'web']);

Route::resource('/permissions',PermissionController::class)->middleware(['auth:sanctum', 'verified', 'web']);

Route::resource('/user', UserController::class)->middleware(['auth:sanctum', 'verified', 'universal', InitializeTenancyByDomain::class]);

// API

// Banks
route::resource('/banks', BankController::class)->middleware(['auth:sanctum', 'verified', 'web']);

 // Fiscal Regimes
route::resource('/fiscal-regimes', FiscalRegimeController::class)->middleware(['auth:sanctum', 'verified', 'web']);

// Industry
route::resource('/industries', IndustryController::class)->middleware(['auth:sanctum', 'verified', 'web']);

// Zipcodes
route::resource('/zipcodes', ZipCodeController::class)->middleware(['auth:sanctum', 'verified', 'web']);


