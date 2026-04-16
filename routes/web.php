<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh1', function () {
    return view('lp3i');
});

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'create']);
