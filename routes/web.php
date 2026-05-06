<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RiwayatController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Welcome
Route::get('/', function () {
    return view('welcome');
});

// Route Kelola Anggota (Pastikan method 'view' dan 'index' ada di Controller terkait)
Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);

// Route Autentikasi
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class,'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboardAdmin', [DashboardController::class, 'dashboardAdmin']);

// Route Fitur Siswa 
Route::get('/deskripsiBuku', [DashboardController::class, 'deskripsiBuku']);
Route::get('/ajuanPeminjaman', [PeminjamanController::class, 'create']);
