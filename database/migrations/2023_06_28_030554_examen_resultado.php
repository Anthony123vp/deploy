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
        Schema::create('examen_resultado', function (Blueprint $table) {
            $table->unsignedBigInteger('id_examen')->primary();;
            $table->unsignedBigInteger('id_reserva');
            $table->string('signos_vitales', 500)->collation('utf8mb4_unicode_ci');
            $table->string('sistema_cardiovascular', 500)->collation('utf8mb4_unicode_ci');
            $table->string('sistema_gastrointestinal', 500)->collation('utf8mb4_unicode_ci');
            $table->string('sistema_musculoesqueletico', 500)->collation('utf8mb4_unicode_ci');
            $table->string('sistema_nervioso', 500)->collation('utf8mb4_unicode_ci');
            $table->string('sistema_endocrino', 500)->collation('utf8mb4_unicode_ci');
            $table->string('sistema_genitourinario', 500)->collation('utf8mb4_unicode_ci');
            $table->string('sistema_inmunologico', 500)->collation('utf8mb4_unicode_ci');
            $table->string('sistema_mental', 500)->collation('utf8mb4_unicode_ci');
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
        Schema::dropIfExists('examen_resultado');
    }
};
