<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'nal', 
        'nim', 
        'email', 
        'nama_anggota', 
        'jurusan', 
        'prodi', 
        'alamat', 
        'kota', 
        'bidang', 
        'kategori_bidang', 
        'telp', 
        'jenjang', 
        'angkatan', 
        'foto', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'semester', 
        'sertifikat'
    ];
}
