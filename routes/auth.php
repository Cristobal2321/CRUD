<?php

use App\Http\Controllers\Auth\EmailVerificationPromptController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\UsuarioController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;



Route::middleware('guest')->group(function () {
    // Cambia el controlador de registro a tu UsuarioControlador
    Route::get('register', [UsuarioController::class, 'create'])
        ->name('register');
    Route::post('register', [UsuarioController::class, 'store']);

    // Cambia el controlador de inicio de sesión a tu UsuarioControlador
    Route::get('login', [UsuarioController::class, 'create'])
        ->name('login');
    Route::post('login', [UsuarioController::class, 'store']);

    // Las demás rutas pueden mantenerse como están
    // ...

    // Cambia el controlador de cierre de sesión a tu UsuarioControlador
    

});


Route::middleware('auth')->group(function () {


    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [UsuarioController::class, 'destroy'])
                ->name('logout');
});