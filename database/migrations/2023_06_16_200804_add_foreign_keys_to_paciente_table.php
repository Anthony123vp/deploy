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
        Schema::table('paciente', function (Blueprint $table) {
            $table->foreign(['id_user'], 'fk_Paciente_USUARIOS1')->references(['id_user'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_insurance'], 'fk_Paciente_INSURANCES1_idx')->references(['id_insurance'])->on('insurances')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paciente', function (Blueprint $table) {
            $table->dropForeign('fk_Paciente_USUARIOS1');
            $table->dropForeign('fk_Paciente_INSURANCES1_idx');
        });
    }
};
