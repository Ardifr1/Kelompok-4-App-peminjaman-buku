<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KelolaAnggotaController;

=======
use App\Http\Controllers\TestingController;
>>>>>>> 1e34ba8e92fc022510f809dde5e22844162b5899
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/kelola-anggota', [KelolaAnggotaController::class, 'view']);
=======
Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);
>>>>>>> 1e34ba8e92fc022510f809dde5e22844162b5899
