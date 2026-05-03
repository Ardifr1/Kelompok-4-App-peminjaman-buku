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
       // 1. Validasi input menggunakan 'username' bukan 'email'
    $credentials = $request->validate([
        'username' => ['required', 'string'], 
        'password' => ['required'],
    ]);

    // 2. Auth::attempt akan otomatis mencari kolom 'username' di database
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'username' => 'Username atau password tidak cocok.',
    ])->onlyInput('username');
    }
}
