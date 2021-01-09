<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_peminjam');
            $table->string('email');
            $table->string('instansi');
            $table->string('acara');
            $table->string('keterangan')->nullable();
            $table->string('tanggal_pinjam');
            $table->string('tanggal_kembali');
            $table->string('status');
            $table->string('kode_pinjam');
            $table->string('telp');
            $table->string('dikembalikan')->nullable();
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
        Schema::dropIfExists('peminjamans');
    }
}
