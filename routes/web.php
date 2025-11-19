<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/add', [AnggotaController::class, 'add'])->name('anggota.add');
Route::post('/anggota/add_submit', [AnggotaController::class, 'add_submit'])->name('add_submit');
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::post('/anggota/update/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::post('/anggota/delete/{id}', [AnggotaController::class, 'delete'])->name('anggota.delete');