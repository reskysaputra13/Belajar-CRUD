<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/halaman/1', [HomeController::class, 'halaman1'])->name('halaman1');
Route::get('/halaman/2', [HomeController::class, 'halaman2'])->name('halaman2');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/edit/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'hapus'])->name('mahasiswa.hapus');
