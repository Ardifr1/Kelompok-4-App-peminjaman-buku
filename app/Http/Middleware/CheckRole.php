<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = Auth::guard('registrasi')->user();
        if (!$user) {
            return redirect()->route('login');
        }

        if (($user->role ?? null) !== $role) {
            // Jika tidak sesuai, arahkan ke dashboard yang sesuai
            return redirect(($user->role ?? 'Siswa') === 'Admin' ? '/dashboardAdmin' : '/dashboard');
        }

        return $next($request);
    }
}

