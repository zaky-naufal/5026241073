@extends('templateEAS')
@section('title', 'Data Karyawan')
@section('konten')


	<table border="1" class="table table-striped">
		<tr>
			<th>kodepegawai</th>
			<th>namalengkap</th>
			<th>divisi</th>
			<th>departemen</th>

		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->ucwords(strtolower($namalengkap)) }}</td>
			<td>{{ $k->namalengkap }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ $k->departemen }}</td>
			<td>
                <a href="/viewEAS/{{ $k->kodepegawai }}" class="btn btn-primary">View</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
