<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuModel;

class tambahbukuController extends Controller
{
    public function index()
    {
        return view('admin.tambah_buku');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_buku' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|in:Umum,Pelajaran',
            'jumlah_buku' => 'required|integer|min:1',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama_buku', 'penulis', 'deskripsi', 'kategori', 'jumlah_buku']);

        // Handle upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/buku'), $filename);
            $data['gambar'] = 'gambar/buku/' . $filename;
        }

        bukuModel::create($data);

        return redirect('/tambahbuku')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $buku = bukuModel::findOrFail($id);
        return view('admin.edit_buku', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $buku = bukuModel::findOrFail($id);

        $request->validate([
            'nama_buku' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|in:Umum,Pelajaran',
            'jumlah_buku' => 'required|integer|min:1',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama_buku', 'penulis', 'deskripsi', 'kategori', 'jumlah_buku']);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($buku->gambar && file_exists(public_path($buku->gambar))) {
                @unlink(public_path($buku->gambar));
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar/buku'), $filename);
            $data['gambar'] = 'gambar/buku/' . $filename;
        }

        $buku->update($data);

        return redirect('/dashboardAdmin')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $buku = bukuModel::findOrFail($id);

        if ($buku->gambar && file_exists(public_path($buku->gambar))) {
            @unlink(public_path($buku->gambar));
        }

        $buku->delete();

        return redirect('/dashboardAdmin')->with('success', 'Buku berhasil dihapus!');
    }
}
