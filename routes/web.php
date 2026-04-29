<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('Testing', [TestingController::class]);
