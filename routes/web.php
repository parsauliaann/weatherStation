<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::controller(AuthController::class)->group(function(){
    Route::middleware('guest')->as('login')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store')->name('.store');
    });

    Route::delete('/', 'logout')->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admins', function(){
        return view('tables');
    });
});