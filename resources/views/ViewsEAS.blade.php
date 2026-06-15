@extends('templateEAS')
@section('title', 'View Data Pegawai')
@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($karyawan as $k)
        <div class="card">
            <div class="card-header">
                Form View Data Pegawai
            </div>

            <div class="card-body">


                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required
                            value="{{ $k->kodepegawai }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" required
                            value="{{ $k->namalengkap }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control" required
                            value="{{ $k->divisi }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" class="form-control" required
                            value="{{ $k->departemen }}">
                    </div>
                </div 
            </div>
    @endforeach
@endsection
