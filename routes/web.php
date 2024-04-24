<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout_adminlte.master');
});

Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

Route::get('dosen', [DosenController::class, 'index'])->name('dosen.index');

Route::get('matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
