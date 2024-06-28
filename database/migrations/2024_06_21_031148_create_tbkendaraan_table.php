<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbkendaraanTable extends Migration
{
    public function up()
    {
        Schema::create('tbkendaraan', function (Blueprint $table) {
            $table->id('id_kendaraan');
            $table->foreignId('user_id')->constrained('tbuser', 'Id_user');
            $table->string('plat_nomor', 10);
            $table->enum('jenis_kendaraan', ['Sedan', 'Minibus', 'Motor']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbkendaraan');
    }
}
