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
        // 1. Validasi input dari form
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

<<<<<<< HEAD
        // 2. Proses Autentikasi
        if (Auth::guard('registrasi')->attempt($credentials)) {
            $request->session()->regenerate();

            // Ambil data user yang sedang login
            $user = Auth::guard('registrasi')->user();

            if (($user->role ?? 'Siswa') === 'Admin') {
                return redirect()->intended('/dashboardAdmin');
            }

            return redirect()->intended('/dashboard');
        }

        // 4. Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'username' => 'Username atau password yang Anda masukkan salah.',
        ])->onlyInput('username');
=======
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
>>>>>>> ad1775a3879fcf3608b04d310b12fe1642f2a0b3
    }

    public function logout(Request $request)
    {
        Auth::guard('registrasi')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}