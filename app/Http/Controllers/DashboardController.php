<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Misalnya, ambil data pengguna atau sesuatu yang ingin ditampilkan di dashboard
        $user = auth()->user();

        if ($user->role == 'admin') {
            // Tampilkan dashboard khusus admin
            return view('admin.dashboard');
        } elseif ($user->role == 'manajer') {
            // Tampilkan dashboard untuk manajer
            return view('manajer.dashboard');
        } else {
            // Tampilkan dashboard untuk petugas kebun atau pengguna lain
            return view('petugas.dashboard');
        }
    }
}
