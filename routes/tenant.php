<?php

declare(strict_types=1);


use App\Http\Controllers\Tenant\AreaPositionController;
use App\Http\Controllers\Tenant\BankController;
use App\Http\Controllers\Tenant\BusinessController;
use App\Http\Controllers\Tenant\ConceptController;
use App\Http\Controllers\Tenant\EmployerRegisterController;
use App\Http\Controllers\Tenant\PayrollController;
use App\Http\Controllers\Tenant\PolicyController;
use App\Http\Controllers\Tenant\TableValueController;
use App\Http\Controllers\Tenant\TenantDashboardController;
use App\Http\Controllers\Tenant\TenantWelcomeController;
use App\Http\Controllers\Tenant\WorkingDayHolidayController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    \Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', [TenantWelcomeController::class, 'index'])->name('tenant.home');
    include('auth.php');
    Route::get('/dashboard',[TenantDashboardController::class,'dashboard'])->middleware('auth:web')->name('tenant.dashboard');
    /*TENANT BUSINESS*/
    Route::resource('/business',BusinessController::class)->middleware('auth:web');
    Route::resource('/banks',BankController::class)->middleware('auth:web');
    Route::resource('/payroll',PayrollController::class)->middleware('auth:web');
    Route::resource('/policies',PolicyController::class)->middleware('auth:web');
    Route::resource('/areapositions',AreaPositionController::class)->middleware('auth:web');
    Route::resource('/concept',ConceptController::class)->middleware('auth:web');
    Route::resource('/tablevalue',TableValueController::class)->middleware('auth:web');
    Route::resource('/workingdayholiday',WorkingDayHolidayController::class)->middleware('auth:web');
    Route::resource('/employer-register',EmployerRegisterController::class)->middleware('auth:web');
});
