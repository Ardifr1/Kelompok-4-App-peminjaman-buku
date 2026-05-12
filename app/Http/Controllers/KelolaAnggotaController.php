<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KelolaAnggotaController extends Controller
{
    public function index()
    {
        $anggota = User::where('role', 'siswa')->get();
        return view('admin.kelola_anggota', compact('anggota'));
    }
}
