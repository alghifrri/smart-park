<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbriwayatparkirTable extends Migration
{
    public function up()
    {
        Schema::create('tbriwayatparkir', function (Blueprint $table) {
            $table->id('id_riwayat');
            $table->foreignId('user_id')->constrained('tbuser', 'Id_user');
            $table->foreignId('idkendaraan')->constrained('tbkendaraan', 'id_kendaraan');
            $table->dateTime('waktu_masuk');
            $table->dateTime('waktu_keluar');
            $table->integer('hargabayar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbriwayatparkir');
    }
}
