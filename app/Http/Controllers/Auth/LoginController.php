<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengguna;  // Ganti User dengan Pengguna

class LoginController extends Controller
{

    protected $redirectTo = '/admin-dashboard';

    /**
     * Menampilkan form login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');  // Menampilkan halaman login
    }

    /**
     * Proses login pengguna.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request)
    {

        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            // Redirect berdasarkan role pengguna
            if ($user->role == 'admin') {
                return redirect('/admin-dashboard');
            } elseif ($user->role == 'manajer') {
                return redirect('/manajer-dashboard');
            } else {
                return redirect('/petugas-kebun-dashboard');
            }
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return redirect()->back()->with('error', 'Email atau password salah.');
    }
 
    /**
     * Logout pengguna.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');  // Redirect ke halaman login setelah logout
    }
}
