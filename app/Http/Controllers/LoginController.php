<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
    $credentials = $request->validate([
        'username' => ['required', 'string'], 
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->status === 'pending') {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return back()->withErrors([
                'username' => 'Akun Anda belum dikonfirmasi oleh Admin. Silakan tunggu.',
            ])->onlyInput('username');
        }

        $request->session()->regenerate();
        if ($user->role === 'admin') {
            return redirect()->intended('dashboardAdmin');
        } else {
            return redirect()->intended('dashboard');
        }
    }

    return back()->withErrors([
        'username' => 'Username atau password tidak cocok.',
    ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
