<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/tenant-register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('tenant.register');
Route::post('/tenant-register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/tenant-login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('tenant.login');

Route::post('/tenant-login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/tenant-forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('tenant.password.request');

Route::post('/tenant-forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('tenant.password.email');

Route::get('/tenant-reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('tenant.password.reset');

Route::post('/tenant-reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('tenant.password.update');

Route::get('/tenant-verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('tenant.verification.notice');

Route::get('/tenant-verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('tenant.verification.verify');

Route::post('/tenant-email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('tenant.verification.send');

Route::get('/tenant-confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('tenant.password.confirm');

Route::post('/tenant-confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/tenant-logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('tenant.logout');
