<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelolaAnggota', [KAnggotaController::class, 'index']);