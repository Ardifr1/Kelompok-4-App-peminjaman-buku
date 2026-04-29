<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KelolaAnggotaController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\KAnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('/kelola-anggota', [KelolaAnggotaController::class, 'view']);
Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);

// Route Autentikasi
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);