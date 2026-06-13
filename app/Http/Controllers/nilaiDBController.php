<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaiDBController extends Controller
{
	public function indexNilai()
	{
    	// mengambil data dari table keranjangbelanja
		$nilai = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('indexNilai',['nilai' => $nilai]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahNilai');

	}

	// method untuk insert data ke table keranjang
	public function store(Request $request)
	{
		// insert data ke table keranjang
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS,
		]);
		// alihkan halaman ke halaman keranjang
		return redirect('/nilaikuliah');

	}



}
