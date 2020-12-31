<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_peminjaman extends Model
{
    protected $fillable = ['peminjamans_id', 'perlengkapans_id'];
}
