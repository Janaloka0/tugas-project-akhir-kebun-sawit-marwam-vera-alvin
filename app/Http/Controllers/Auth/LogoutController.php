<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
 
        session()->invalidate(); // Invalidasi sesi
        session()->regenerateToken(); // Regenerasi CSRF token untuk keamanan

        return redirect('/')->with('success', 'You have successfully logged out.');
    }
}
