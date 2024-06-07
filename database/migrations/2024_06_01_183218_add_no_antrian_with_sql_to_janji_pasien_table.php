<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoAntrianToJanjiPasienTable extends Migration
{
    public function up()
    {
        Schema::table('janji_pasien', function (Blueprint $table) {
            $table->unsignedInteger('no_antrian')->after('id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('janji_pasien', function (Blueprint $table) {
            $table->dropColumn('no_antrian');
        });
    }
}
