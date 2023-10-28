<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\UsuarioController;
use App\Http\Controllers\auth\RegistrarController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'App\Http\Controllers\Dashboard\PostController@index')->name("dashboard");
    Route::resources([
        'post' => 'App\Http\Controllers\Dashboard\PostController',
        'category' => 'App\Http\Controllers\Dashboard\CategoryController',
    ]);
});




Route::group(['prefix' => 'dashboard'], function ()  {
    
    Route::get('registro', [RegistrarController::class, 'create'])
        ->name('registro');
    Route::post('registro', [RegistrarController::class, 'store']);

    Route::get('inicio-sesion', [UsuarioController::class, 'create'])
        ->name('inicio-sesion');
    Route::post('inicio-sesion', [UsuarioController::class, 'store']);




        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');     

    });


require __DIR__.'/auth.php';