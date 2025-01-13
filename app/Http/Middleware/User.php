<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Jika user adalah admin, arahkan ke halaman admin
            if (Auth::user()->usertype === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // Jika user adalah user biasa, arahkan ke halaman user
            if (Auth::user()->usertype === 'user') {
                return redirect()->route('user.Home');
            }
        }

        // Jika tidak login, arahkan ke halaman login atau lainnya
        return redirect()->route('login');
    }
}
