<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

Route::get('/pengguna', [PenggunaController::class, 'store']);
// Route::post('/pengguna', 'PenggunaController@store');
// Route::get('/pengguna', 'PenggunaController@index');

