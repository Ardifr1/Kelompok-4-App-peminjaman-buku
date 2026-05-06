<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class konfirmasiController extends Controller
{
    public function index()
    {
        return view('admin.konfirmasi_anggota');
    }
}
