<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa/index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:App\mahasiswa,email',
            'npm' => 'required|digits:5',
            'jenis_kelamin' => 'required',
            'tanggal_masuk' => 'required|date',
            'tanggal_lulus' => 'required|date',
            'jurusan' => 'required'
        ]);


        Mahasiswa::create($request->all());

        return redirect('mahasiswa')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa/edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'npm' => 'required|digits:5',
            'jenis_kelamin' => 'required',
            'tanggal_masuk' => 'required|date',
            'tanggal_lulus' => 'required|date',
            'jurusan' => 'required'
        ]);

        Mahasiswa::where('id', $mahasiswa->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'npm' => $request->npm,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_masuk' => $request->tanggal_masuk,
                'tanggal_lulus' => $request->tanggal_lulus,
                'jurusan' => $request->jurusan
            ]);

        return redirect('mahasiswa')->with('status', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);

        return redirect('mahasiswa')->with('status', 'Data berhasil dihapus!');
    }
}
