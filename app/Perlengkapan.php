<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    protected $fillable = ['nama_barang', 'kondisi', 'tipe', 'tahun', 'jumlah', 'sumber', 'isDipinjam', 'statusPinjam', 'qrcode', 'gambar'];
}
