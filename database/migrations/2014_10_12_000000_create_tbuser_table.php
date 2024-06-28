<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbuserTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbuser', function (Blueprint $table) {
            $table->id('Id_user');
            $table->string('username', 100);
            $table->string('email')->unique();
            $table->string('password', 100);
            $table->enum('role', ['Admin', 'Kasir', 'Pengguna']);
            $table->enum('Status', ['Member', 'Nonmember']);
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbuser');
    }
};
