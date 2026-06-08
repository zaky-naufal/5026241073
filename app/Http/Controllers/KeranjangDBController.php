<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangDBController extends Controller
{
	public function indexKeranjang()
	{
    	// mengambil data dari table keranjangbelanja
		$keranjang = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
		return view('indexKeranjang',['keranjang' => $keranjang]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function beli()
	{

		// memanggil view tambah
		return view('keranjangBeli');

	}

	// method untuk insert data ke table keranjang
	public function storeKeranjang(Request $request)
	{
		// insert data ke table keranjang
		DB::table('keranjangbelanja')->insert([
			'kode' => $request->kode,
			'jumlah' => $request->jumlah,
			'harga' => $request->harga,
		]);
		// alihkan halaman ke halaman keranjang
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data keranjang
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

}
