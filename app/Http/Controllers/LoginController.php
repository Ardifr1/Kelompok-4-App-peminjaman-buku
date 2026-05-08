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

        // 2. Proses Autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Ambil data user yang sedang login
            $user = Auth::user();

            // 3. Pengalihan berdasarkan Jabatan
            // Pastikan kolom di database kamu bernama 'jabatan'
            if ($user->jabatan === 'Admin') {
                return redirect()->intended('/dashboardAdmin');
            }

            // Jika bukan Admin, ke dashboard biasa
            return redirect()->intended('/dashboard');
        }

        // 4. Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'username' => 'Username atau password yang Anda masukkan salah.',
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