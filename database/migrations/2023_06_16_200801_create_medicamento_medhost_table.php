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
        Schema::create('medicamento_medhost', function (Blueprint $table) {
            $table->id('id_medicamento_medhost', true);
            $table->unsignedBigInteger('id_laboratorio')->index('fk_LABORATORIOS_has_MEDICAMENTOS_LABORATORIOS1_idx');
            $table->unsignedBigInteger('id_medicina')->index('fk_LABORATORIOS_has_MEDICAMENTOS_MEDICAMENTOS1_idx');
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
        Schema::dropIfExists('medicamento_medhost');
    }
};
