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
        Schema::create('medico_horarios', function (Blueprint $table) {
            $table->id('id_medico_horario', true);
            $table->unsignedBigInteger('id_medico')->index('fkidMedico_idx');
            $table->unsignedBigInteger('id_horario')->index('fk_MedicoMedhost_HorariosMedhost1_idx');
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
        Schema::dropIfExists('medico_horarios');
    }
};
