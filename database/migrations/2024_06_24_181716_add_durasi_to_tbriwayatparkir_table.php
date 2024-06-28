<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('tbriwayatparkir', function (Blueprint $table) {
        $table->integer('durasi')->nullable()->after('hargabayar');
    });
}

public function down()
{
    Schema::table('tbriwayatparkir', function (Blueprint $table) {
        $table->dropColumn('durasi');
    });
}
};
