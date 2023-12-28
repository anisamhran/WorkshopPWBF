<?php

use App\Models\KotaModel;
use App\Models\PekerjaModel;
use App\Models\ProvinsiModel;
use App\Models\KategoriPekerjaModel;
use App\Models\transaksi_kontrak;
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
    $provinsis = ProvinsiModel::all();
    $kotas = KotaModel::all();
    $pekerjas = PekerjaModel::all()->take(5);
    $order = transaksi_kontrak::all();
    return view('frontend.homepage',compact('provinsis','kotas', 'pekerjas', 'order'));
});


//ADMIN
Route::group(['middleware' => 'role:1'], function () {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('landingpage');
    Route::get('/master-pekerja', [\App\Http\Controllers\PekerjaController::class, 'index'])->name('master-pekerja');
    Route::get('/create-pekerja', [\App\Http\Controllers\PekerjaController::class, 'create'])->name('create-pekerja');
    Route::post('/save-pekerja', [\App\Http\Controllers\PekerjaController::class, 'store'])->name('save-pekerja');
    Route::get('/edit-pekerja/{id}', [\App\Http\Controllers\PekerjaController::class, 'edit'])->name('edit-pekerja');
    Route::put('/update-pekerja/{id}', [\App\Http\Controllers\PekerjaController::class, 'update'])->name('update-pekerja');
    Route::delete('/hapus-pekerja/{id}', [\App\Http\Controllers\PekerjaController::class, 'destroy'])->name('destroy-pekerja');
    Route::get('/data-pekerja-dihapus', [\App\Http\Controllers\PekerjaController::class, 'deleted'])->name('deleted-pekerja');
    Route::get('/restore-pekerja/{id}', [\App\Http\Controllers\PekerjaController::class, 'restore'])->name('restore-pekerja');


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


    Route::get('/master-kategori', [\App\Http\Controllers\KategoriPekerjaController::class, 'index'])->name('master-kategori');
    Route::get('/create-kategori', [\App\Http\Controllers\KategoriPekerjaController::class, 'create'])->name('create-kategori');
    Route::post('/save-kategori', [\App\Http\Controllers\KategoriPekerjaController::class, 'store'])->name('save-kategori');
    Route::get('/edit-kategori/{id}', [\App\Http\Controllers\KategoriPekerjaController::class, 'edit'])->name('edit-kategori');
    Route::put('/edit-kategori/{id}', [\App\Http\Controllers\KategoriPekerjaController::class, 'update'])->name('update-kategori');
    Route::delete('/hapus-kategori/{id}', [\App\Http\Controllers\KategoriPekerjaController::class, 'destroy'])->name('destroy-kategori');
    Route::get('/data-kategori-dihapus', [\App\Http\Controllers\KategoriPekerjaController::class, 'deleted'])->name('deleted-kategori');
    Route::get('/restore-kategori/{id}', [\App\Http\Controllers\KategoriPekerjaController::class, 'restore'])->name('restore-kategori');

    Route::get('/messages', [\App\Http\Controllers\HomeController::class, 'admcontact'])->name('admin-contact');
    Route::get('/transactions', [\App\Http\Controllers\HomeController::class, 'transaction'])->name('admin-transactions');

});

//MANAGER
// Route::middleware(['rolemiddleware:3'])->group(function () {
    // Rute-rute yang hanya dapat diakses oleh manager
    Route::get('/manager', [\App\Http\Controllers\ManagerController::class, 'index'])->name('dashboard');

// });


Route::group(['middleware' => 'role:2'], function () {
    // Rute-rute yang hanya dapat diakses oleh user yang sudah login
Route::get('/form-kontrak/{pekerja_id}', [\App\Http\Controllers\KontrakController::class, 'form_kontrak'])->name('form-kontrak');
Route::post('/payment', [\App\Http\Controllers\KontrakController::class, 'store'])->name('save-form-kontrak');
Route::get('/transaction-history/{id}', [\App\Http\Controllers\KontrakController::class, 'history'])->name('transaction-history');
Route::get('/notifikasi/{id}', [\App\Http\Controllers\KontrakController::class, 'notifikasi'])->name('notifikasi');


Route::get('/profil/{id}', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profil');
Route::get('/edit-profil/{id}', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('edit-profil');
Route::put('/edit-profil/{id}', [\App\Http\Controllers\ProfileController::class, 'update'])->name('update-profil');

});

    // Route::middleware(['role:3'])->group(function () {
        // Rute-rute yang hanya dapat diakses oleh manager
        Route::get('/manager', [\App\Http\Controllers\ManagerController::class, 'index'])->name('dashboard');

    // });


//USER
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/pekerja', [\App\Http\Controllers\HomeController::class, 'pekerja'])->name('pekerja');
Route::get('/detail-pekerja/{id}', [\App\Http\Controllers\HomeController::class, 'detail_pekerja'])->name('detail-pekerja');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\HomeController::class, 'storemessage'])->name('save-message');
Route::get('/review', [\App\Http\Controllers\HomeController::class, 'review'])->name('review');


Route::group(['middleware' => ['web']], function () {
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'storeUser'])->name('register');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [\App\Http\Controllers\AuthController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});