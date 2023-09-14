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
    return view('frontend.home');
});

Route::get('/home-admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('landingpage');

//USER
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/pekerja', [\App\Http\Controllers\HomeController::class, 'pekerja'])->name('pekerja');

