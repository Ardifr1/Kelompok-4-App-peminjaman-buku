<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAnggotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class,'index']);
