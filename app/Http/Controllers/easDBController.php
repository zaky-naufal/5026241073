<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class easDBController extends Controller
{
	public function indexEAS()
	{
    	// mengambil data dari table pegawai
		$karyawan = DB::table('mykaryawan')->get();

    	// mengirim data pegawai ke view index
		return view('indexEAS',['karyawan' => $karyawan]);

	}

	// method untuk edit data pegawai
	public function viewEAS($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$karyawan = DB::table('mykaryawan')->where('kodepegawai', $id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('ViewsEAS',['karyawan' => $karyawan]);

	}


}
