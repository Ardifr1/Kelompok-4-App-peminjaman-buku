<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (!$user || $user->role !== 'admin') {
            // Redirect non-admin users to dashboard with error message
            return redirect('/dashboard')->with('error', 'Akses ditolak. Halaman ini hanya untuk Admin.');
        }
        return $next($request);
    }
}
