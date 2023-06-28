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
        Schema::create('receta_medica', function (Blueprint $table) {
            $table->id('id_receta', true);
            $table->unsignedBigInteger('id_reserva')->index('fk_receta_medica_reserva1_idx');
            $table->string('terapias', 300)->nullable();
            $table->string('examenes', 300)->nullable();
            $table->string('motivo_ingreso', 300);
            $table->string('diagnostico_ingreso', 300);
            $table->string('comorbilidades', 300);
            $table->string('procedimientos', 300);
            $table->string('medicamentos_recibidos', 300);
            $table->string('comentario_doctor', 300);
            $table->string('estado_paciente', 300);
            $table->string('medicamentos_casa', 300);
            $table->string('img_firma_doctor', 300)->nullable();
            $table->char('estado', 1)->default('1');    
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            // $table->foreign('id_receta')->references('id')->on('cita_medica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receta_medica');
    }
};
