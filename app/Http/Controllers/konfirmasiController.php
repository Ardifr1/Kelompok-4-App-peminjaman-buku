<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class konfirmasiController extends Controller
{
    public function index()
    {
        $pendingUsers = \App\Models\User::where('status', 'pending')->get();
        return view('admin.konfirmasi_anggota', compact('pendingUsers'));
    }

    public function approve($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->status = 'approved';
        $user->save();

        return redirect('/konfirmasi')->with('success', 'Akun berhasil dikonfirmasi.');
    }

    public function reject($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();

        return redirect('/konfirmasi')->with('success', 'Akun ditolak dan dihapus.');
    }
}
