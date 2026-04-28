<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KelolaAnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelola-anggota', [KelolaAnggotaController::class, 'view']);