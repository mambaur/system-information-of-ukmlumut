<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_peminjaman extends Model
{
    protected $fillable = ['perlengkapans_id', 'peminjamans_kode_pinjam'];

    protected $table = 'detail_peminjamans';
}
