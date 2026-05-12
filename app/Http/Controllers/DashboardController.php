<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuModel;

class DashboardController extends Controller
{
    public function index()
    {
        $bukuPelajaran = bukuModel::where('kategori', 'Pelajaran')->get();
        $bukuUmum = bukuModel::where('kategori', 'Umum')->get();

        return view('siswa.dashboard', compact('bukuPelajaran', 'bukuUmum'));
    }

    public function deskripsiBuku($id)
    {
        $buku = bukuModel::findOrFail($id);
        return view('siswa.deskripsiBuku', compact('buku'));
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
}