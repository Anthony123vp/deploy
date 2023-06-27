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
            $table->string('resultados', 180);
            $table->string('observacion', 100);
            $table->char('estado', 1)->default('1');;
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
