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
        Schema::create('recepcionistas', function (Blueprint $table) {
            $table->id("id_recepcionista");
            $table->integer('id_user')->default(1);
            $table->string('nombres');
            $table->string('ape_paterno');
            $table->string('ape_materno');
            $table->string('sexo');
            $table->string('celular');
            $table->string('dni');
            $table->string('f_nacimiento');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepcionistas');
    }
};
