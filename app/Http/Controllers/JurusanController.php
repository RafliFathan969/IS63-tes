<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view ('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //disini hasil eksekusi dari klik tombol "Tambah Data" untuk menampilkan form tambah data jurusan
        return view('jurusan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_jurusan' => 'required|unique:jurusan,kode_jurusan',
            'nama_jurusan' => 'required|max:100',
        ]);

        $jurusan =  Jurusan::create([
            'kode_jurusan' => $request->kode_jurusan,
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        return redirect('/jurusan')->with(['success' => 'Data jurusan berhasil ditambahkan.']);
        // return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil disimpan.');
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
        $jurusan = Jurusan::find($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kode_jurusan' => 'required|unique:jurusan,kode_jurusan,' . $id,
            'nama_jurusan' => 'required|max:100',
        ]);


        $jurusan = Jurusan::find($id);
        $jurusan->update([
            'kode_jurusan' => $request->kode_jurusan,
            'nama_jurusan' => $request->nama_jurusan,
        ]);
        return redirect()->route('/jurusan')->with(['success' => 'Data jurusan berhasil diperbarui.']);


        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update([
            'kode_jurusan' => $request->kode_jurusan,
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        return redirect()->route('/jurusan')->with(['success' => 'Data jurusan berhasil diperbarui.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect()->route('/jurusan')->with(['success' => 'Data jurusan berhasil dihapus.']);
    }
}
