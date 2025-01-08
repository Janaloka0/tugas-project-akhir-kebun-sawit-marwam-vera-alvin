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
    return view('dashboard');
})->middleware(['auth', CheckRole::class.':admin']);  // Pastikan pengguna sudah login dan memiliki role admin
Route::get('/manajer-dashboard', function () {
    return view('dashboard');
})->middleware(CheckRole::class.':manajer');  // Menambahkan role 'manajer' sebagai argumen untuk middleware