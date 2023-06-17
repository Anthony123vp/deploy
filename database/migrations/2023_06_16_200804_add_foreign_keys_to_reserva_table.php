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
        Schema::table('cita_medica', function (Blueprint $table) {
            $table->foreign(['id_paciente'], 'fk_Citas_Paciente1')->references(['id_paciente'])->on('paciente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_servicio_medhost'], 'fk_cita_medica_ServiciosMedHost1')->references(['id_servicio_medhost'])->on('serviciosmedhost')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_consultorio'], 'fk_reserva_consultarios1')->references(['id_consultorio'])->on('consultorios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_medico_horario'], 'fk_Reserva_Medico_Horarios1')->references(['id_medico_horario'])->on('medico_horarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reserva', function (Blueprint $table) {
            $table->dropForeign('fk_Citas_Paciente1');
            $table->dropForeign('fk_cita_medica_ServiciosMedHost1');
            $table->dropForeign('fk_reserva_consultarios1');
            $table->dropForeign('fk_Reserva_Medico_Horarios1');
        });
    }
};
