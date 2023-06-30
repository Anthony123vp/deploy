<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $connection = 'medhosthistorial';
    public function up()
    {
        Schema::create('terapia_resultado', function (Blueprint $table) {
            $table->bigIncrements('id_terapia');
            $table->unsignedBigInteger('id_reserva');
            $table->string('objetivos_tratamiento', 500)->collation('utf8mb4_unicode_ci');
            $table->string('modalidad_terapia', 500)->collation('utf8mb4_unicode_ci');
            $table->string('frecuencia_sesiones', 500)->collation('utf8mb4_unicode_ci');
            $table->string('duracion_tratamiento', 500)->collation('utf8mb4_unicode_ci');
            $table->string('intervenciones_terapeuticas', 500)->collation('utf8mb4_unicode_ci');
            $table->string('recomendaciones', 500)->collation('utf8mb4_unicode_ci');
            $table->string('img_firma_doctor', 500)->collation('utf8mb4_unicode_ci');
            $table->char('estado', 1)->default('1')->collation('utf8mb4_unicode_ci');
            $table->timestamps();

            $table->index('id_reserva');
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terapia_resultado');
    }
};
