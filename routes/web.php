<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KAnggotaController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);