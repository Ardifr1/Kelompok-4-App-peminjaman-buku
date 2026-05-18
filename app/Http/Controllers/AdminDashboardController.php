<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuModel;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $buku = bukuModel::all();
        return view('admin.kelola_data', compact('buku'));
    }
}
