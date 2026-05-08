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
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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