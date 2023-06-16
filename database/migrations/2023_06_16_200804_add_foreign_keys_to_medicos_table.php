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
        Schema::table('medicos', function (Blueprint $table) {
            $table->foreign(['id_user'], 'fk_MEDICOS_USUARIOS1')->references(['id_user'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_especialidad'], 'fk_Medico_Especialidades1')->references(['id_especialidad'])->on('especialidades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicos', function (Blueprint $table) {
            $table->dropForeign('fk_MEDICOS_USUARIOS1');
            $table->dropForeign('fk_Medico_Especialidades1');
        });
    }
};
