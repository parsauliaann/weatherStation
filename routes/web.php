<?php

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

Route::middleware('guest')->group(function(){
    Route::get('/', function(){
        return view('index');
    })->name('login');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    });

    Route::get('/admins', function(){
        return view('tables');
    });
});