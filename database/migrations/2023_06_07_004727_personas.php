<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id("id_persona");
            $table->string('dni')->unique();
            $table->string('nombres');
            $table->string('apellidos_paternos');
            $table->string('apellidos_maternos');
            $table->string('sexo');
            $table->string('email')->unique();
            $table->string('celular');
            $table->string('dia');
            $table->string('month');
            $table->string('anio');
            $table->integer('estado')->default(1)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
