<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\KAnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

=======
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KelolaAnggotaController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\KAnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dashbordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Welcome
>>>>>>> main
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
=======
// Route Kelola Anggota (Pastikan method 'view' dan 'index' ada di Controller terkait)
Route::get('/kelola-anggota', [KelolaAnggotaController::class, 'view']);
>>>>>>> main
Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);

// Route Autentikasi
Route::get('/login', [LoginController::class, 'index']);
<<<<<<< HEAD
Route::get('/register', [RegisterController::class,'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
=======
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/dashbord', [dashbordController::class, 'index']);
>>>>>>> main
