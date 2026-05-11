<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiModel;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Auth.register");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'nis' => 'required|max:255',
            'kelas' => 'required|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = \Illuminate\Support\Facades\Hash::make($validatedData['password']);
        $validatedData['role'] = 'siswa';
        $validatedData['status'] = 'pending';

        \App\Models\User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan tunggu admin untuk mengonfirmasi akun Anda.');
    }

    /**
     * Display the specified resource.
     */
    public function show(RegistrasiModel $s)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegistrasiModel $s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegistrasiModel $s)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegistrasiModel $s)
    {
        //
    }
}
