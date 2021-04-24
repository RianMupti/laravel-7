<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class DiagramController extends Controller
{
    private function _jumlahJurusan($jurusan)
    {
        $mahasiswa = Mahasiswa::where('jurusan', $jurusan)->get();
        return $mahasiswa->count();
    }

    public function index()
    {
        $informatika = $this->_jumlahJurusan('Teknik Informatika');

        $elektro = $this->_jumlahJurusan('Teknik Elektro');

        $mesin = $this->_jumlahJurusan('Teknik Mesin');

        return view('mahasiswa.batang', compact('informatika', 'elektro', 'mesin'));
    }

    public function pie()
    {
        $informatika = $this->_jumlahJurusan('Teknik Informatika');

        $elektro = $this->_jumlahJurusan('Teknik Elektro');

        $mesin = $this->_jumlahJurusan('Teknik Mesin');

        return view('mahasiswa.pie', compact('informatika', 'elektro', 'mesin'));
    }
}
