<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalDokterTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal_dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bagian');
            $table->string('poli');
            $table->string('kelamin');
            $table->string('jadwal');
            $table->string('jam');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_dokter');
    }
}
