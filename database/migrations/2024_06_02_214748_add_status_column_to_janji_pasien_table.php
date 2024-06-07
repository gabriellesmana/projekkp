<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusColumnToJanjiPasienTable extends Migration
{
    public function up()
    {
        Schema::table('janji_pasien', function (Blueprint $table) {
            $table->string('status')->default('belum dipanggil');
        });
    }

    public function down()
    {
        Schema::table('janji_pasien', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
