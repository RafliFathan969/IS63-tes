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
            <form method="POST" action="/mahasiswa">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                    <input type="text" value="{{ $mahasiswa->nim }}" name="nim" class="form-control @error('nim') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nim')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" value="{{ $mahasiswa->nama }}" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nama')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="">
                        <option value="">Pilih Jurusan</option>
                        <option {{ $mahasiswa->jurusan == 'Informatika Komputer' ? 'selected' : '' }} value="Informatika Komputer">Informatika Komputer</option>
                        <option {{ $mahasiswa->jurusan == 'Sekretaris' ? 'selected' : '' }} value="Sekretaris">Sekretaris</option>
                        <option {{ $mahasiswa->jurusan == 'Komputer Akuntansi' ? 'selected' : '' }} value="Komputer Akuntansi">Komputer Akuntansi</option>
                        <option {{ $mahasiswa->jurusan == 'Manajemen Perkantoran' ? 'selected' : '' }} value="Manajemen Perkantoran">Manajemen Perkantoran</option>
                        <option {{ $mahasiswa->jurusan == 'Komunikasi Bisnis Digital' ? 'selected' : '' }} value="Komunikasi Bisnis Digital">Komunikasi Bisnis Digital</option>
                    </select>
                    @error('jurusan')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                    <input type="text" value="{{ $mahasiswa->tempat_lahir }}" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tempat_lahir')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" value="{{ $mahasiswa->tanggal_lahir }}" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tanggal_lahir')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Handphone</label>
                    <input type="text" value="{{ $mahasiswa->nohp }}" name="no_handphone" class="form-control @error('no_handphone') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('no_handphone')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Domisili</label>
                    <input type="text" value="{{ $mahasiswa->domisili }}" name="domisili" class="form-control @error('domisili') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('domisili')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" value="{{ $mahasiswa->email }}" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis kelamin</label>
                    <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option {{ $mahasiswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }} value="Laki-laki">Laki-laki</option>
                        <option {{ $mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tahun Masuk</label>
                    <input type="number" value="{{ $mahasiswa->tahun_masuk }}" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tahun_masuk')
                        <div class="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
@endsection
