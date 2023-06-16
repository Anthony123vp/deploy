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
            $table->unsignedBigInteger('⁯id_reserva')->index('fk_receta_medica_reserva1_idx');
            $table->string('terapias', 45)->nullable();
            $table->string('examenes', 45)->nullable();
            $table->string('medicinas', 45)->nullable();
            $table->string('comentario', 45);
            $table->char('estado', 1);
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
        Schema::dropIfExists('receta_medica');
    }
};
