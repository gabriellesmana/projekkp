<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateJanjiPasienTable extends Migration
{
    public function up()
    {
        Schema::create('janji_pasien', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_janji');
            $table->string('dokter');
            $table->string('jam_bertemu');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('golongan_darah');
            $table->string('nomor_ktp');
            $table->text('alamat');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('status_pernikahan');
            $table->string('kontak_darurat_nama');
            $table->string('kontak_darurat_nomor_hp');
            $table->text('kontak_darurat_alamat');
            $table->text('keluhan');
            $table->unsignedInteger('no_antrian')->nullable(); // Tambahkan kolom no_antrian
            $table->string('status')->default('belum dipanggil');
            $table->timestamps();
        });
    }

    

    public function down()
    {
        Schema::dropIfExists('janji_pasien');
    }
}
