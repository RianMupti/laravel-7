<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'email', 'npm', 'jurusan', 'jenis_kelamin', 'tanggal_masuk', 'tanggal_lulus',];
}
