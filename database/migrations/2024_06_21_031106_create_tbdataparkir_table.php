<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbdataparkirTable extends Migration
{
    public function up()
    {
        Schema::create('tbdataparkir', function (Blueprint $table) {
            $table->id('iddataparkir');
            $table->integer('slot_parkir');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbdataparkir');
    }
}
