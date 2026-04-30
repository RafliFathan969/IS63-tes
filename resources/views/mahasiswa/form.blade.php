@extends('layout.master')
@section('title')
    Data Tambah Mahasiswa
@endsection

@section('judul')
    Data Tambah Mahasiswa
@endsection

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="mahasiswa.store">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nim')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nama')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                        <option value="">Pilih Jurusan</option>
                        <option value="Informatika Komputer">Informatika Komputer</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Manajemen Perkantoran">Manajemen Perkantoran</option>
                        <option value="Komputer Akuntansi">Komputer Akuntansi</option>
                        <option value="Digital Bisnis Komunikasi">Digital Bisnis Komunikasi</option>
                    </select>
                    @error('jurusan')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tempat_lahir')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tanggal_lahir')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Handphone</label>
                    <input type="text" name="nohp" class="form-control @error('nohp') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nohp')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Domisili</label>
                    <input type="text" name="domisili" class="form-control @error('domisili') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('domisili')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <input type="jenis_kelamin" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('jenis_kelamin')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tahun Masuk</label>
                    <input type="tahun_masuk" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tahun_masuk')
                        <div class="alert">
                            {{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
