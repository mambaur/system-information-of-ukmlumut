<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nal');
            $table->string('nim');
            $table->string('email');
            $table->string('nama_anggota');
            $table->string('jurusan');
            $table->string('alamat');
            $table->string('kota');
            $table->string('bidang');
            $table->string('telp');
            $table->string('jenjang');
            $table->integer('angkatan');
            $table->string('foto');
            $table->string('ttl');
            $table->string('kategori_bidang');
            $table->string('semester');
            $table->string('sertifikat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
