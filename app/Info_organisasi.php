<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_organisasi extends Model
{
    protected $fillable = ['nama_organisasi', 'nama_pengurus', 'jabatan', 'email', 'no_telp'];
}
