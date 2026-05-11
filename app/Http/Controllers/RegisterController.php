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
        $validated = $request->validate([
            'nis' => ['required', 'string', 'max:255', 'unique:registrasi,nis'],
            'nama' => ['required', 'string', 'max:255'],
            'kelas' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:registrasi,username'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $user = RegistrasiModel::create([
            'nis' => $validated['nis'],
            'nama' => $validated['nama'],
            'kelas' => $validated['kelas'],
            'username' => $validated['username'],
            'password' => \Illuminate\Support\Facades\Hash::make($validated['password']),
            'role' => 'Siswa',
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
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
