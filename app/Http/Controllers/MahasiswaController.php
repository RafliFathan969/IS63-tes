<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view ('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //disini hasil eksekusi dari klik tombol "Tambah Data" untuk menampilkan form tambah data mahasiswa
        return view('mahasiswa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required|max:100',
            'jurusan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'nohp' => 'required|unique:mahasiswas,nohp|max:20',
            'domisili' => 'required',
            'email' => 'required|email|unique:mahasiswas,email',
            'jenis_kelamin' => 'required',
            'tahun_masuk' => 'required|integer',
        ]);

        $mahasiswa =  Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nohp' => $request->nohp,
            'domisili' => $request->domisili,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        return redirect('/mahasiswa')->with(['success' => 'Data mahasiswa berhasil ditambahkan.']);
        // return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $id,
            'nama' => 'required|max:100',
            'jurusan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'nohp' => 'required|unique:mahasiswas,nohp,' . $id . '|max:20',
            'domisili' => 'required',
            'email' => 'required|email|unique:mahasiswas,email,' . $id,
            'jenis_kelamin' => 'required',
            'tahun_masuk' => 'required|integer',
        ]);


        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nohp' => $request->nohp,
            'domisili' => $request->domisili,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        return redirect()->route('/mahasiswa')->with(['success' => 'Data mahasiswa berhasil diperbarui.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('/mahasiswa')->with(['success' => 'Data mahasiswa berhasil dihapus.']);
    }
}
