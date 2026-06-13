@extends('template')
@section('title', 'Data Nilai Siswa')
@section('konten')


    <br />
    <td>
        <a href="/tambahNilai" class="btn btn-warning btn-sm">Tambah Data</a>
    </td>
    <br />

    <table border="1" class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>

        </tr>
        @foreach ($nilai as $n)
            < <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>

                <!-- 1. Kolom Nilai Huruf -->
                <td>
                    @if ($n->NilaiAngka <= 40)
                        D
                    @elseif($n->NilaiAngka <= 60)
                        C
                    @elseif($n->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>

                <!-- 2. Kolom Bobot (NilaiAngka x SKS) -->
                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
                </tr>
        @endforeach
    </table>

@endsection
