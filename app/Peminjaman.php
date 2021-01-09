<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = ['nama_peminjam', 'email', 'instansi', 'acara', 'keterangan', 'tanggal_pinjam', 'tanggal_kembali', 'status', 'kode_pinjam', 'telp', 'dikembalikan'];

    protected $table = 'peminjamans';
}
