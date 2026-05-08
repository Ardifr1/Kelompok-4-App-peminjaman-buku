<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RiwayatController;
<<<<<<< HEAD
=======
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\KelolaAnggotaController;
use App\Http\Controllers\konfirmasiController;
use App\Http\Controllers\tambahbukuController;
>>>>>>> e7095db6d7d573cd93b532091c2c810a18a876ed

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Welcome
Route::get('/', function () {
    return view('welcome');
});

// Route Autentikasi
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

<<<<<<< HEAD
Route::get('/register', [RegisterController::class, 'index']);

// Grup Route yang Memerlukan Login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboardAdmin', [DashboardController::class, 'dashboardAdmin']);
    
    // Fitur Lainnya
    Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);
    Route::get('/deskripsiBuku', [DashboardController::class, 'deskripsiBuku']);
    Route::get('/ajuanPeminjaman', [PeminjamanController::class, 'create']);
});
=======
// Route Fitur Siswa 
Route::get('/deskripsiBuku', [DashboardController::class, 'deskripsiBuku']);
Route::get('/ajuanPeminjaman', [PeminjamanController::class, 'create']);
Route::get('/riwayat', [RiwayatController::class, 'index']);

// Route Fitur Admin
Route::get('/data', [AdminDashboardController::class, 'index']);
Route::get('/anggota', [KelolaAnggotaController::class, 'index']);
Route::get('/konfirmasi', [konfirmasiController::class, 'index']);
Route::get('/tambahbuku', [tambahbukuController::class, 'index']);
>>>>>>> e7095db6d7d573cd93b532091c2c810a18a876ed
