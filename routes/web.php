<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');