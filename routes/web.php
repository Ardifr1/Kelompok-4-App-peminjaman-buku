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

// Route Autentikasi
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
<<<<<<< HEAD
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
=======
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboardAdmin', [DashboardController::class, 'dashboardAdmin']);
>>>>>>> ad1775a3879fcf3608b04d310b12fe1642f2a0b3

Route::get('/register', [RegisterController::class, 'index']);

<<<<<<< HEAD
// Grup Route yang Memerlukan Login
Route::middleware(['auth:registrasi'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('checkrole:Siswa');
    Route::get('/dashboardAdmin', [DashboardController::class, 'dashboardAdmin'])->middleware('checkrole:Admin');

    // Fitur Siswa/Admin lainnya bisa ditambahkan di bawah ini




    
    // Fitur Lainnya
    Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);
    Route::get('/deskripsiBuku', [DashboardController::class, 'deskripsiBuku']);
    Route::get('/ajuanPeminjaman', [PeminjamanController::class, 'create']);
});
=======
// Route Fitur Admin
Route::get('/data', [AdminDashboardController::class, 'index']);
Route::get('/anggota', [KelolaAnggotaController::class, 'index']);
Route::get('/konfirmasi', [konfirmasiController::class, 'index']);
Route::post('/konfirmasi/{id}/approve', [konfirmasiController::class, 'approve'])->name('konfirmasi.approve');
Route::delete('/konfirmasi/{id}/reject', [konfirmasiController::class, 'reject'])->name('konfirmasi.reject');
Route::get('/tambahbuku', [tambahbukuController::class, 'index']);
>>>>>>> ad1775a3879fcf3608b04d310b12fe1642f2a0b3
