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
        Schema::create('examen_resultado', function (Blueprint $table) {
            $table->id('id_examen', true);
            $table->unsignedBigInteger('id_reserva')->index('fk_examen_resultado_reserva1_idx');
            $table->string('signos_vitales', 500);
            $table->string('sistema_cardiovascular', 500);
            $table->string('sistema_gastrointestinal', 500);
            $table->string('sistema_musculoesqueletico', 500);
            $table->string('sistema_nervioso', 500);
            $table->string('sistema_endocrino', 500);
            $table->string('sistema_genitourinario', 500);
            $table->string('sistema_inmunologico', 500);
            $table->string('sistema_mental', 500);
            $table->string('img_firma_doctor', 500);
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
        Schema::dropIfExists('examen_resultado');
    }
};
