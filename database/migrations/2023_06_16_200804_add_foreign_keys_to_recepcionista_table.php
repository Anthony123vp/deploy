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
        Schema::table('recepcionistas', function (Blueprint $table) {
            $table->foreign(['id_user'], 'fk_Paciente_USUARIOS10')->references(['id_user'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recepcionista', function (Blueprint $table) {
            $table->dropForeign('fk_Paciente_USUARIOS10');
        });
    }
};
