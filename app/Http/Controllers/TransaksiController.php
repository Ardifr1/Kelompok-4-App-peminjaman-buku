<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $allRiwayat = \App\Models\RiwayatModel::with(['buku', 'user'])->latest()->get();

        $pendingRequests = $allRiwayat->where('status', 'pending');
        $activeLoans = $allRiwayat->whereIn('status', ['dipinjam', 'kembali_pending', 'dikembalikan', 'ditolak']);
        $pendingReturns = $allRiwayat->where('status', 'kembali_pending');
        $completedLoans = $allRiwayat->where('status', 'dikembalikan');

        return view('admin.Transaksi', compact('pendingRequests', 'activeLoans', 'pendingReturns', 'completedLoans'));
    }

    public function setujuiPeminjaman($id)
    {
        $riwayat = \App\Models\RiwayatModel::findOrFail($id);
        $buku = \App\Models\bukuModel::findOrFail($riwayat->buku_id);

        if ($buku->jumlah_buku < $riwayat->jumlah) {
            return back()->with('error', 'Stok buku tidak mencukupi.');
        }

        // Kurangi stok buku
        $buku->jumlah_buku -= $riwayat->jumlah;
        $buku->save();

        // Ubah status jadi dipinjam
        $riwayat->status = 'dipinjam';
        $riwayat->save();

        return redirect('/transaksi')->with('success', 'Peminjaman buku berhasil disetujui.');
    }

    public function tolakPeminjaman($id)
    {
        $riwayat = \App\Models\RiwayatModel::findOrFail($id);
        $riwayat->status = 'ditolak';
        $riwayat->save();

        return redirect('/transaksi')->with('success', 'Peminjaman buku telah ditolak.');
    }

    public function konfirmasiPengembalian($id)
    {
        $riwayat = \App\Models\RiwayatModel::findOrFail($id);
        $buku = \App\Models\bukuModel::findOrFail($riwayat->buku_id);

        // Tambah kembali stok buku
        $buku->jumlah_buku += $riwayat->jumlah;
        $buku->save();

        // Ubah status dan tanggal kembali
        $riwayat->status = 'dikembalikan';
        $riwayat->tanggal_kembali = now()->toDateString();
        $riwayat->save();

        return redirect('/transaksi')->with('success', 'Pengembalian buku berhasil dikonfirmasi.');
    }
}
