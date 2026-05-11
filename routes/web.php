<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\KelolaAnggotaController;
use App\Http\Controllers\konfirmasiController;
use App\Http\Controllers\tambahbukuController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route Fitur Siswa
Route::get('/deskripsiBuku', [DashboardController::class, 'deskripsiBuku']);
Route::get('/ajuanPeminjaman', [PeminjamanController::class, 'create']);
Route::get('/riwayat', [RiwayatController::class, 'index']);

// Route Fitur Admin
Route::get('/dashboardAdmin', [AdminDashboardController::class, 'index']);
Route::get('/anggota', [KelolaAnggotaController::class, 'index']);
Route::get('/konfirmasi', [konfirmasiController::class, 'index']);
Route::post('/konfirmasi/{id}/approve', [konfirmasiController::class, 'approve'])->name('konfirmasi.approve');
Route::delete('/konfirmasi/{id}/reject', [konfirmasiController::class, 'reject'])->name('konfirmasi.reject');
Route::get('/tambahbuku', [tambahbukuController::class, 'index']);