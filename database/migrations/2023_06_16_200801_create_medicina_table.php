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
        Schema::create('medicina', function (Blueprint $table) {
            $table->id('id_medicina', true);
            $table->string('nombre', 45);
            $table->integer('cantidad');
            $table->decimal('precio', 10, 0);
            $table->integer('stock');
            $table->timestamp('create_time');
            $table->timestamp('update_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicina');
    }
};
