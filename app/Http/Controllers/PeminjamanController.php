<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $buku = \App\Models\bukuModel::findOrFail($id);
        return view('siswa.ajuanPeminjaman', compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $buku = \App\Models\bukuModel::findOrFail($id);

        $request->validate([
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required|after_or_equal:tanggal_pinjam',
            'jumlah' => 'required|integer|min:1|max:' . $buku->jumlah_buku,
        ]);

        // Simpan data peminjaman ke tabel riwayat dengan status pending
        \App\Models\RiwayatModel::create([
            'user_id' => auth()->id(),
            'buku_id' => $buku->id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'pending',
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/dashboard')->with('success', 'Peminjaman buku berhasil diajukan. Menunggu konfirmasi Admin.');
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
}
