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
        Schema::table('serviciosmedhost', function (Blueprint $table) {
            $table->foreign(['id_servicio_especialidad'], 'fk_ServiciosMedHost_servicios_especialidades1')->references(['id_servicio_especialidad'])->on('servicios_especialidades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('serviciosmedhost', function (Blueprint $table) {
            $table->dropForeign('fk_ServiciosMedHost_servicios_especialidades1');
        });
    }
};
