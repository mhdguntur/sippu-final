<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 255)->nullable();
            $table->string('nama', 255)->nullable();
            $table->string('nik', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('roles', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('url_ktp', 255)->nullable();
            $table->string('nama_usaha', 255)->nullable();
            $table->string('kelurahan', 255)->nullable();
            $table->bigInteger('no_telp')->length(19)->nullable();
            $table->bigInteger('npwp')->length(19)->nullable();
            $table->bigInteger('no_iumk')->length(19)->nullable();
            $table->bigInteger('no_siup')->length(19)->nullable();
            $table->bigInteger('no_tdp')->length(19)->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->string('sektor_usaha', 255)->nullable();
            $table->string('sentra', 255)->nullable();
            $table->bigInteger('id_sentra')->length(19)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('usaha_utama', 255)->nullable();
            $table->string('produk_hasil', 255)->nullable();
            $table->string('tenaga_tetap', 255)->nullable();
            $table->bigInteger('tenaga_tidak_tetap')->length(19)->nullable();
            $table->bigInteger('tenaga_tidak_bayar')->length(19)->nullable();
            $table->string('kapasitas_produksi', 255)->nullable();
            $table->bigInteger('harga_satuan')->length(19)->nullable();
            $table->bigInteger('omzet')->length(19)->nullable();
            $table->bigInteger('modal_sendiri')->length(19)->nullable();
            $table->bigInteger('modal_luar')->length(19)->nullable();
            $table->string('laporan_keuangan', 255)->nullable();
            $table->string('jangkauan_pemasaran', 255)->nullable();
            $table->string('pemasaran_online', 255)->nullable();
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
        Schema::dropIfExists('users');
    }
}
