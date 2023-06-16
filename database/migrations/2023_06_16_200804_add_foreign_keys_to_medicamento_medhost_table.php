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
        Schema::table('medicamento_medhost', function (Blueprint $table) {
            $table->foreign(['id_laboratorio'], 'fk_LABORATORIOS_has_MEDICAMENTOS_LABORATORIOS1')->references(['id_laboratorio'])->on('laboratorios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_medicina'], 'fk_LABORATORIOS_has_MEDICAMENTOS_MEDICAMENTOS1')->references(['id_medicina'])->on('medicina')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicamento_medhost', function (Blueprint $table) {
            $table->dropForeign('fk_LABORATORIOS_has_MEDICAMENTOS_LABORATORIOS1');
            $table->dropForeign('fk_LABORATORIOS_has_MEDICAMENTOS_MEDICAMENTOS1');
        });
    }
};
