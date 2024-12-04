<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LaporanController;

// Route::post('/register', [PenggunaController::class, 'store']);
// Route::post('/pengguna', 'PenggunaController@store');
// Route::get('/pengguna', 'PenggunaController@index');
Route::resource('pengguna', PenggunaController::class);
Route::resource('distribusi', DistribusiController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('laporan', LaporanController::class);

