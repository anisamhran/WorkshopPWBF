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
    return view('frontend.homepage');
});

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('landingpage');
Route::get('/add-pekerja', [\App\Http\Controllers\AdminController::class, 'addpekerja'])->name('addpekerja');
route::get('/edit-pekerja', [\App\Http\Controllers\AdminController::class, 'editpekerja'])->name('editpekerja');
Route::get('/data-pekerja', [\App\Http\Controllers\AdminController::class, 'datapekerja'])->name('datapekerja');

//USER
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/pekerja', [\App\Http\Controllers\HomeController::class, 'pekerja'])->name('pekerja');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/review', [\App\Http\Controllers\HomeController::class, 'review'])->name('review');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');