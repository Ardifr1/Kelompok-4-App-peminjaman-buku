<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KelolaAnggotaController extends Controller
{
    public function index()
    {
        $anggota = User::where('role', 'siswa')->where('status', 'approved')->get();
        return view('admin.kelola_anggota', compact('anggota'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/anggota')->with('success', 'Anggota berhasil dihapus.');
    }
}
