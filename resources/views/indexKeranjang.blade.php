@extends('template')
@section('title', 'Data Keranjang')
@section('konten')


	<br/>
	<br/>

	<table border="1" class="table table-striped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>

		</tr>
		@foreach($keranjang as $k)
		<tr>
			<td>{{ $k->ID}}</td>
			<td>{{ $k->kode }}</td>
			<td>{{ $k->jumlah }}</td>
			<td>Rp {{ number_format($k->harga, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($k->harga * $k->jumlah, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangBeli/{{ $k->ID }}" class="btn btn-warning btn-sm">Beli</a>

				<a href="/keranjangbatal/{{ $k->ID }}" class="btn btn-danger btn-sm">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
