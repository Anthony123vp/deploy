<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'medhosthistorial';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->unsignedBigInteger('id_reserva')->primary();
            $table->bigInteger('id_paciente')->nullable();
            $table->string('paciente', 100);
            $table->string('medico', 100);
            $table->string('especialidad', 20);
            $table->string('servicio', 20);
            $table->string('serv_exacto', 50);
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->char('cod_habitacion', 5);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
};
