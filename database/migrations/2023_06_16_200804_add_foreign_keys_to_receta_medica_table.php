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
        Schema::table('receta_medica', function (Blueprint $table) {
            $table->foreign(['id_reserva'], 'fk_receta_medica_reserva1')->references(['id_reserva'])->on('cita_medica')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receta_medica', function (Blueprint $table) {
            $table->dropForeign('fk_receta_medica_reserva1');
        });
    }
};
