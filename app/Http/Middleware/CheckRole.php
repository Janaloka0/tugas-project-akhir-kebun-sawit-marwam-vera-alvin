<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $rolesCollection = collect($role);

        if (Auth::check() && $rolesCollection->contains(Auth::user()->role)) {
            return $next($request);  // Lanjutkan jika role sesuai
        }

        // Jika tidak, arahkan ke halaman login atau halaman error
        return redirect('/')->withErrors('Anda tidak memiliki akses untuk halaman ini.');
    }
}
