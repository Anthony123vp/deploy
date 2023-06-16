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
        Schema::create('terapia_resultado', function (Blueprint $table) {
            $table->id('id_terapia', true);
            $table->unsignedBigInteger('id_reserva')->index('fk_terapia_resultado_reserva1_idx');
            $table->string('evaluacion_fisica', 45);
            $table->string('recomendaciones', 45);
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
        Schema::dropIfExists('terapia_resultado');
    }
};
