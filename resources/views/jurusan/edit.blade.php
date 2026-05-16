@extends('layout.master')
@section('title')
    Data Tambah Jurusan
@endsection

@section('judul')
    Data Tambah Jurusan
@endsection

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Jurusan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="/jurusan/{{ $jurusan->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Jurusan</label>
                    <select name="kode_jurusan" class="form-control @error('kode_jurusan') is-invalid @enderror">
                        <option {{ $jurusan->kode_jurusan == '' ? 'selected' : '' }}value="">Pilih Kode Jurusan</option>
                        <option {{ $jurusan->kode_jurusan == 'Informatika Komputer' ? 'selected' : '' }} value="Informatika Komputer">IK</option>
                        <option {{ $jurusan->kode_jurusan == 'Sekretaris' ? 'selected' : '' }} value="Sekretaris">SS</option>
                        <option {{ $jurusan->kode_jurusan == 'Manajemen Perkantoran' ? 'selected' : '' }} value="Manajemen Perkantoran">OM</option>
                        <option {{ $jurusan->kode_jurusan == 'Komputer Akuntansi' ? 'selected' : '' }} value="Komputer Akuntansi">KA</option>
                        <option {{ $jurusan->kode_jurusan == 'Digital Bisnis Komunikasi' ? 'selected' : '' }} value="Digital Bisnis Komunikasi">DBC</option>
                    </select>
                    @error('kode_jurusan')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Jurusan</label>
                    <select name="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror">
                        <option {{ $jurusan->nama_jurusan == '' ? 'selected' : '' }} value="">Pilih Nama Jurusan</option>
                        <option {{ $jurusan->nama_jurusan == 'Informatika Komputer' ? 'selected' : '' }} value="Informatika Komputer">Informatika Komputer</option>
                        <option {{ $jurusan->nama_jurusan == 'Sekretaris' ? 'selected' : '' }} value="Sekretaris">Sekretaris</option>
                        <option {{ $jurusan->nama_jurusan == 'Manajemen Perkantoran' ? 'selected' : '' }} value="Manajemen Perkantoran">Manajemen Perkantoran</option>
                        <option {{ $jurusan->nama_jurusan == 'Komputer Akuntansi' ? 'selected' : '' }} value="Komputer Akuntansi">Komputer Akuntansi</option>
                        <option {{ $jurusan->nama_jurusan == 'Digital Bisnis Komunikasi' ? 'selected' : '' }} value="Digital Bisnis Komunikasi">Digital Bisnis Komunikasi</option>
                    </select>
                    @error('nama_jurusan')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
