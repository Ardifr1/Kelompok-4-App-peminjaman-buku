<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tambahbukuController extends Controller
{
    public function index()
    {
        return view('admin.tambah_buku');
    }
}
