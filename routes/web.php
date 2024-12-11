<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\compact;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KebunController;
use App\Http\Middleware\login;
use App\Http\Controllers\LoginController;



// Suggested code may be subject to a license. Learn more: ~LicenseLog:405770572.
// Suggested code may be subject to a license. Learn more: ~LicenseLog:3079282348.

Route::group(["middleware" => [login::class]], function(){
    Route::get('/beranda',function(){
        return view('layout');
    });
    Route::get('/dashboard',function(){
        $pengguna=DB::table('pengguna')->get();
        return view('layouts.dashboard', compact('pengguna'));
    });
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('distribusi', DistribusiController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('kebun', KebunController::class);
});

Route::get('/login',[LoginController::class, 'login']);
Route::post('/login',[LoginController::class, 'cekLogin']);
Route::get('/logout',[LoginController::class, 'logout']);

