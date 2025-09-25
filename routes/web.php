<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
});

// daftar mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// form tambah mahasiswa
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');

// simpan data baru
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

// form edit mahasiswa
Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

// update data
Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

// hapus data
Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

//Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('matakuliah', MataKuliahController::class);

