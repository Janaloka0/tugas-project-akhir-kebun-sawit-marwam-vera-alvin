<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

// Route::post('/register', [PenggunaController::class, 'store']);
// Route::post('/pengguna', 'PenggunaController@store');
// Route::get('/pengguna', 'PenggunaController@index');
Route::resource('pengguna', PenggunaController::class);

