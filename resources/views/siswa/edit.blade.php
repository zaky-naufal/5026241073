@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Edit Siswa</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('siswa.update', $siswa->NRP) }}" method="POST" onsubmit="return validasiForm()">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">NRP</label>
            <input type="text" name="NRP" id="NRP" class="form-control" maxlength="10" value="{{ old('NRP', $siswa->NRP) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="Nama" id="Nama" class="form-control" maxlength="20" value="{{ old('Nama', $siswa->Nama) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="Kelas" id="Kelas" class="form-control" maxlength="5" value="{{ old('Kelas', $siswa->Kelas) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="TanggalLahir" id="TanggalLahir" class="form-control" value="{{ old('TanggalLahir', $siswa->TanggalLahir) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') { Swal.fire({ title: "Kesalahan Input Data!", text: "NRP wajib diisi", icon: "error" }); return false; }
            if (nrp.length > 10) { Swal.fire({ title: "Kesalahan Input Data!", text: "NRP maksimal 10 karakter", icon: "error" }); return false; }
            if (nama === '') { Swal.fire({ title: "Kesalahan Input Data!", text: "Nama wajib diisi", icon: "error" }); return false; }
            if (nama.length > 20) { Swal.fire({ title: "Kesalahan Input Data!", text: "Nama maksimal 20 karakter", icon: "error" }); return false; }
            if (kelas === '') { Swal.fire({ title: "Kesalahan Input Data!", text: "Kelas wajib diisi", icon: "error" }); return false; }
            if (kelas.length > 5) { Swal.fire({ title: "Kesalahan Input Data!", text: "Kelas maksimal 5 karakter", icon: "error" }); return false; }
            if (tanggal === '') { Swal.fire({ title: "Kesalahan Input Data!", text: "Tanggal lahir wajib diisi", icon: "error" }); return false; }

            return true;
        }
    </script>
@endsection
