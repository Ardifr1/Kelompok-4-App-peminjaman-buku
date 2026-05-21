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
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\pengembalianController;
use App\Http\Middleware\IsAdmin;


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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route Fitur Siswa
Route::get('/deskripsiBuku/{id}', [DashboardController::class, 'deskripsiBuku']);
Route::get('/ajuanPeminjaman/{id}', [PeminjamanController::class, 'create']);
Route::post('/ajuanPeminjaman/{id}', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/riwayat', [RiwayatController::class, 'index']);
Route::post('/riwayat/{id}/kembalikan', [RiwayatController::class, 'ajukanPengembalian'])->name('riwayat.kembalikan');
Route::get('/pengembalian', [pengembalianController::class, 'index']);

// Route Fitur Admin
Route::middleware(['auth', IsAdmin::class])->group(function () {
        Route::get('/dashboardAdmin', [AdminDashboardController::class, 'index']);
        Route::get('/anggota', [KelolaAnggotaController::class, 'index']);
        Route::delete('/anggota/{id}', [KelolaAnggotaController::class, 'destroy'])->name('anggota.destroy');
        Route::get('/konfirmasi', [konfirmasiController::class, 'index']);
        Route::post('/konfirmasi/{id}/approve', [konfirmasiController::class, 'approve'])->name('konfirmasi.approve');
        Route::delete('/konfirmasi/{id}/reject', [konfirmasiController::class, 'reject'])->name('konfirmasi.reject');
        Route::get('/tambahbuku', [tambahbukuController::class, 'index']);
        Route::post('/tambahbuku', [tambahbukuController::class, 'store'])->name('tambahbuku.store');
        Route::get('/buku/{id}/edit', [tambahbukuController::class, 'edit'])->name('buku.edit');
        Route::put('/buku/{id}', [tambahbukuController::class, 'update'])->name('buku.update');
        Route::delete('/buku/{id}', [tambahbukuController::class, 'destroy'])->name('buku.destroy');
        Route::get('/transaksi', [TransaksiController::class, 'index']);
        Route::post('/transaksi/{id}/setujui', [TransaksiController::class, 'setujuiPeminjaman'])->name('transaksi.setujui');
        Route::post('/transaksi/{id}/tolak', [TransaksiController::class, 'tolakPeminjaman'])->name('transaksi.tolak');
        Route::post('/transaksi/{id}/konfirmasi-kembali', [TransaksiController::class, 'konfirmasiPengembalian'])->name('transaksi.konfirmasi_kembali');
});