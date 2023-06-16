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
        Schema::table('servicios_especialidades', function (Blueprint $table) {
            $table->foreign(['id_especialidad'], 'fk_Servicios_has_Especialidades_Especialidades1')->references(['id_especialidad'])->on('especialidades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_servicio'], 'fk_Servicios_has_Especialidades_Servicios1')->references(['id_servicio'])->on('servicios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicios_especialidades', function (Blueprint $table) {
            $table->dropForeign('fk_Servicios_has_Especialidades_Especialidades1');
            $table->dropForeign('fk_Servicios_has_Especialidades_Servicios1');
        });
    }
};
