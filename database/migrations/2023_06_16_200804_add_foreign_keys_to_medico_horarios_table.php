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
        Schema::table('medico_horarios', function (Blueprint $table) {
            $table->foreign(['id_medico'], 'fkidMedico')->references(['id_medico'])->on('medicos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_horario'], 'fk_MedicoMedhost_HorariosMedhost1')->references(['id_horario'])->on('horarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medico_horarios', function (Blueprint $table) {
            $table->dropForeign('fkidMedico');
            $table->dropForeign('fk_MedicoMedhost_HorariosMedhost1');
        });
    }
};
