<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = ['nal', 'nim', 'nama_anggota', 'jurusan', 'alamat', 'kota', 'bidang', 'telp', 'jenjang', 'angkatan', 'foto'];
}
