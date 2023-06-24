<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->id('id_paciente', true);
            $table->unsignedBigInteger('id_user')->index('fk_Paciente_USUARIOS1_idx');
            $table->unsignedBigInteger('id_insurance')->index('fk_Paciente_INSURANCES1_idx');
            $table->string('nombres', 45);
            $table->string('ape_paterno', 45);
            $table->string('ape_materno', 45);
            $table->char('sexo', 1);
            $table->string('celular', 11);
            $table->char('dni', 8)->unique('dni_UNIQUE');
            $table->date('f_nacimiento');
            $table->char('estado', 1)->default('1');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
};
