<?php

declare(strict_types=1);


use App\Http\Controllers\Tenant\AreaPositionController;
use App\Http\Controllers\Tenant\BankController;
use App\Http\Controllers\Tenant\BranchController;
use App\Http\Controllers\Tenant\BusinessController;
use App\Http\Controllers\Tenant\BusinessPositionController;
use App\Http\Controllers\Tenant\BusinessWorkdayController;
use App\Http\Controllers\Tenant\ConceptController;
use App\Http\Controllers\Tenant\EmployeeListController;
use App\Http\Controllers\Tenant\FielController;
use App\Http\Controllers\Tenant\ImssPatronalRegisterController;
use App\Http\Controllers\Tenant\PayrollController;
use App\Http\Controllers\Tenant\PolicyController;
use App\Http\Controllers\Tenant\TableBenefitsController;
use App\Http\Controllers\Tenant\TableValueController;
use App\Http\Controllers\Tenant\TenantDashboardController;
use App\Http\Controllers\Tenant\TenantWelcomeController;
use App\Http\Controllers\Tenant\UploadFilesController;
use App\Http\Controllers\Tenant\WorkingDayHolidayController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\ScopeSessions;
use App\Http\Controllers\Tenant\BusinessFestiveDayController;

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
    InitializeTenancyBySubdomain::class,
    //PreventAccessFromCentralDomains::class,
    ScopeSessions::class
])->group(function () {
    Route::get('/', [TenantWelcomeController::class, 'index'])->name('tenant.home');
    include('auth.php');
    Route::get('/dashboard', [TenantDashboardController::class, 'dashboard'])->middleware('auth:web')->name('tenant.dashboard');
    /*TENANT BUSINESS*/
    Route::resource('/business', BusinessController::class)->middleware('auth:web');
    Route::resource('/branches', BranchController::class)->middleware('auth:web');
    //    Route to add a branch belonging to an specific business
    Route::get('/branches/create/{business}', [BranchController::class, 'create'])->middleware('auth:web')->name('branches.create');
    Route::patch('/business', [BusinessController::class, 'updateByField'])->middleware('auth:web')->name('business.update-by-field');
    Route::patch('/updateStpStatus/{business}', [BusinessController::class, 'updateStpStatus'])->name('business.stp');
    Route::patch('/updateByField/{id}/{field}', [BusinessController::class, 'saveFields'])->name('update-by-field');


    Route::resource('/banks', BankController::class)->middleware('auth:web');
    Route::resource('/employee-list', EmployeeListController::class)->middleware('auth:web');
    Route::resource('/payroll', PayrollController::class)->middleware('auth:web');
    Route::resource('/policies', PolicyController::class)->middleware('auth:web');
    Route::resource('/area-positions', AreaPositionController::class)->middleware('auth:web');
    Route::resource('/concept', ConceptController::class)->middleware('auth:web');
    Route::resource('/table-value', TableValueController::class)->middleware('auth:web');
    Route::resource('/table-benefits', TableBenefitsController::class)->middleware('auth:web');



    //    Working day
    Route::resource('/working-day-holiday', WorkingDayHolidayController::class)->middleware('auth:web');
    Route::resource('/business-working-day', BusinessWorkdayController::class)->middleware('auth:web');
    Route::resource('/business-festive-days', BusinessFestiveDayController::class)->middleware('auth:web');
    Route::get('/deleteHour/{id}', [BusinessWorkdayController::class, 'deleteHour'])->name('deleteHour');
    Route::get('/workday/{id}/{day}', [BusinessWorkdayController::class, 'deleteWorkdayHours'])->name('deleteWorkdayHour');


    Route::resource('/imss-employer-registers', ImssPatronalRegisterController::class)->middleware('auth:web');
    Route::resource('/business-positions', BusinessPositionController::class)->middleware('auth:web');
    Route::resource('/fiel', FielController::class)->middleware('auth:web');
    // UPLOADS FILES
    Route::post('/uploadFiles', [UploadFilesController::class, 'store'])->middleware('auth:web');
    Route::get('/uploadFiles/{id}', [UploadFilesController::class, 'getFile'])->middleware('auth:web');

    // Unsubscribe rout
    Route::get('/unsubscribe-user', function () {
//        return view('');
    })->name('unsubscribe-user');

});

