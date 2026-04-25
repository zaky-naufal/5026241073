<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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





Route::get('dosen', [DosenController::class, 'index']);
