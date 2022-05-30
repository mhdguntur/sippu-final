<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('pelayanan_id');
            $table->date('tanggal');
            $table->string('nama_usaha', 255);
            $table->string('nama_pemilik', 255);
            $table->string('jalan', 255);
            $table->string('kelurahan', 255);
            $table->string('kota', 255);
            $table->string('provinsi', 255);
            $table->bigInteger('no_hp')->length(19);
            $table->string('email', 255);
            $table->string('permasalahan', 255);
            $table->string('status_pendaftaran', 255);
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
        Schema::dropIfExists('pendaftarans');
    }
}
