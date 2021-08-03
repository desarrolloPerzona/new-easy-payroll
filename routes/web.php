<?php

use App\Events\TenantHasSubscribe;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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


Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth:sanctum', 'verified','universal',InitializeTenancyByDomain::class])->name('dashboard');
Route::get('/admin-dashboard',[AdminDashboardController::class,'index'])->middleware(['auth:sanctum', 'verified','universal',InitializeTenancyByDomain::class])->name('adminDashboard');
Route::resource('/user',UserController::class)->middleware(['auth:sanctum', 'verified','universal',InitializeTenancyByDomain::class]);
route::resource('/banks',BankController::class)->middleware(['auth:sanctum', 'verified','web']);
