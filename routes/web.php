<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\KeranjangDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\nilaiDBController;
use App\Http\Controllers\easDBController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan5', function () {
	return view('meeting5');

});

Route::get('pertemuan4', function () {
	return view('meeting4');

});

Route::get('tugasBS4', function () {
	return view('tugas4');

});


Route::get('pertemuan3', function () {
	return view('meeting3');
});

Route::get('pertemuan2', function () {
	return view('meeting2');
});

Route::get('pertemuan1', function () {
	return view('meeting1');
});


Route::get('/pegawai', [PegawaiDBController::class, 'index']);

//route CRUD
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/{nama}', [PegawaiDBController::class, 'index']);

Route::get('/keranjangbelanja', [KeranjangDBController::class, 'indexKeranjang']);
Route::get('/keranjangBeli/{id}', [KeranjangDBController::class, 'beli']);
Route::post('/keranjangstore', [KeranjangDBController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [KeranjangDBController::class, 'batal']);

Route::get('/nilaikuliah', [nilaiDBController::class, 'indexNilai']);
Route::get('/tambahNilai', [nilaiDBController::class, 'tambah']);
Route::post('/storeNilai', [nilaiDBController::class, 'store']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/eas', [easDBController::class, 'indexEAS']);
Route::get('/viewEAS/{id}', [easDBController::class, 'viewEAS']);
Route::post('/storeNilai', [easDBController::class, 'store']);
