<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbtransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('tbtransaksi', function (Blueprint $table) {
            $table->id('idtransaksi');
            $table->foreignId('iduser')->constrained('tbuser', 'Id_user');
            $table->foreignId('idkendaraan')->constrained('tbkendaraan', 'id_kendaraan');
            $table->integer('hargaparkir');
            $table->timestamp('waktupembayaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbtransaksi');
    }
}
