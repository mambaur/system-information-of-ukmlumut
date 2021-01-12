<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_organisasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_organisasi');
            $table->string('nama_pengurus');
            $table->string('jabatan')->nullable();
            $table->string('no_telp');
            $table->string('email')->nullable();
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
        Schema::dropIfExists('info_organisasis');
    }
}
