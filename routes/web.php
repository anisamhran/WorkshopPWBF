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


//ADMIN
Route::middleware(['rolemiddleware:1'])->group(function () {
    // Rute-rute yang hanya dapat diakses oleh admin
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('landingpage');
    Route::get('/add-pekerja', [\App\Http\Controllers\AdminController::class, 'addpekerja'])->name('addpekerja');
    Route::get('/data-pekerja', [\App\Http\Controllers\AdminController::class, 'datapekerja'])->name('datapekerja');
    Route::get('/review-admin', [\App\Http\Controllers\AdminController::class, 'admin_review'])->name('adminreview');
    Route::get('/contact-admin', [\App\Http\Controllers\AdminController::class, 'admin_contact'])->name('admincontact');
    Route::get('/pembayaran-admin', [\App\Http\Controllers\AdminController::class, 'admin_pembayaran'])->name('adminpembayaran');
    Route::get('/laporan-admin', [\App\Http\Controllers\AdminController::class, 'admin_laporan'])->name('adminlaporan');


    Route::get('/master-provinsi', [\App\Http\Controllers\ProvinsiController::class, 'index'])->name('master-provinsi');
    Route::get('/create-provinsi', [\App\Http\Controllers\ProvinsiController::class, 'create'])->name('create-provinsi');
    Route::post('/save-provinsi', [\App\Http\Controllers\ProvinsiController::class, 'store'])->name('save-provinsi');
    Route::get('/edit-provinsi/{id}', [\App\Http\Controllers\ProvinsiController::class, 'edit'])->name('edit-provinsi');
    Route::put('/edit-provinsi/{id}', [\App\Http\Controllers\ProvinsiController::class, 'update'])->name('update-provinsi');
    Route::delete('/hapus-provinsi/{id}', [\App\Http\Controllers\ProvinsiController::class, 'destroy'])->name('destroy-provinsi');
    Route::get('/data-provinsi-dihapus', [\App\Http\Controllers\ProvinsiController::class, 'deleted'])->name('deleted-provinsi');
    Route::get('/restore-provinsi/{id}', [\App\Http\Controllers\ProvinsiController::class, 'restore'])->name('restore-provinsi');
  
  
    Route::get('/master-kota', [\App\Http\Controllers\KotaController::class, 'index'])->name('master-kota');
    Route::get('/create-kota', [\App\Http\Controllers\KotaController::class, 'create'])->name('create-kota');
    Route::post('/save-kota', [\App\Http\Controllers\KotaController::class, 'store'])->name('save-kota');
    Route::get('/edit-kota/{id}', [\App\Http\Controllers\KotaController::class, 'edit'])->name('edit-kota');
    Route::put('/edit-kota/{id}', [\App\Http\Controllers\KotaController::class, 'update'])->name('update-kota');
    Route::delete('/hapus-kota/{id}', [\App\Http\Controllers\KotaController::class, 'destroy'])->name('destroy-kota');
    Route::get('/data-kota-dihapus', [\App\Http\Controllers\KotaController::class, 'deleted'])->name('deleted-kota');
    Route::get('/restore-kota/{id}', [\App\Http\Controllers\KotaController::class, 'restore'])->name('restore-kota');
});

//MANAGER
Route::middleware(['rolemiddleware:3'])->group(function () {
    // Rute-rute yang hanya dapat diakses oleh manager
    Route::get('/manager', [\App\Http\Controllers\ManagerController::class, 'index'])->name('dashboard');

});

Route::middleware(['rolemiddleware:2'])->group(function () {
    // Rute-rute yang hanya dapat diakses oleh user yang sudah login
});
=======
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('landingpage');
Route::get('/add-pekerja', [\App\Http\Controllers\AdminController::class, 'addpekerja'])->name('addpekerja');
route::get('/edit-pekerja', [\App\Http\Controllers\AdminController::class, 'editpekerja'])->name('editpekerja');
Route::get('/data-pekerja', [\App\Http\Controllers\AdminController::class, 'datapekerja'])->name('datapekerja');
>>>>>>> 4de98e6d892e9ecb88ca6bd451db42ff911bf7f9

//USER
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/pekerja', [\App\Http\Controllers\HomeController::class, 'pekerja'])->name('pekerja');
Route::get('/detail-pekerja-1', [\App\Http\Controllers\HomeController::class, 'detail_pekerja'])->name('detail-pekerja-1');
Route::get('/pekerja', [\App\Http\Controllers\HomeController::class, 'pekerja'])->name('pekerja');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/review', [\App\Http\Controllers\HomeController::class, 'review'])->name('review');



Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [\App\Http\Controllers\AuthController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
