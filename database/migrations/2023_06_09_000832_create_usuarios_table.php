<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id("id_usuarios");
            $table->string('email');
            $table->string('password_1');
            $table->string('password_2');
            $table->integer('estado')->default(1);
            $table->integer('id_rol');
            // $table->foreign('id_rol')->references('id_rol')->on('roles');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
