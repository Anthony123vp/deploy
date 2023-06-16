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
        Schema::create('servicios_especialidades', function (Blueprint $table) {
            $table->id('id_servicio_especialidad', true);
            $table->unsignedBigInteger('id_servicio')->index('fk_Servicios_has_Especialidades_Servicios1_idx');
            $table->unsignedBigInteger('id_especialidad')->index('fk_Servicios_has_Especialidades_Especialidades1_idx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_especialidades');
    }
};
