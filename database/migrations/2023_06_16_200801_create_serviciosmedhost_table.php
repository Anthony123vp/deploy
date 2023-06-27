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
        Schema::create('serviciosmedhost', function (Blueprint $table) {
            $table->id('id_servicio_medhost', true);
            $table->unsignedBigInteger('id_servicio_especialidad')->index('fk_ServiciosMedHost_servicios_especialidades1_idx');
            $table->string('nombre', 50);
            $table->float('precio', 10, 0);
            $table->char('estado', 1)->default('1');
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
        Schema::dropIfExists('serviciosmedhost');
    }
};
