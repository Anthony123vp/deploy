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
    Schema::create('pacientes', function (Blueprint $table) {
        $table->id();
        $table->string('dni')->unique();
        $table->string('nombres');
        $table->string('apellidos_paternos');
        $table->string('apellidos_maternos');
        $table->string('sexo');
        $table->string('dia');
        $table->string('month');
        $table->string('anio');
        $table->string('email')->unique();
        $table->string('celular');
        $table->string('insurance');
        $table->string('password_1');
        $table->string('password_2');
        $table->integer('estado')->default(1)->nullable();
        $table->timestamps();
    });
}   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
