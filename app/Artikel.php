<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'image', 'konten', 'bidang', 'status', 'penulis'];
}
