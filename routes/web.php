<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\CheckRole;


Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('kebuns', KebunController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('produksi', ProduksiController::class);
    Route::resource('distribusi', DistribusiController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('kategori-panen', KategoriPanenController::class);
})->middleware(['auth', CheckRole::class.':admin']);  // Pastikan pengguna sudah login dan memiliki role admin
Route::get('/manajer-dashboard', function () {
    return view('manajer.dashboard');
})->middleware(CheckRole::class.':manajer');  // Menambahkan role 'manajer' sebagai argumen untuk middleware