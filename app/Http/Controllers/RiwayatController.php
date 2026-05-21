<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatModel;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat = RiwayatModel::with('buku')->where('user_id', Auth::id())->latest()->get();

        return view('siswa.riwayat', compact('riwayat'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function ajukanPengembalian($id)
    {
        $riwayat = RiwayatModel::where('user_id', Auth::id())
            ->where('status', 'dipinjam')
            ->findOrFail($id);

        $riwayat->status = 'kembali_pending';
        $riwayat->save();

        return redirect('/riwayat')->with('success', 'Pengajuan pengembalian berhasil dikirim. Menunggu konfirmasi Admin.');
    }
}

