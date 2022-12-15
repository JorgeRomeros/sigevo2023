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
        Schema::create('daily_reports', function (Blueprint $table) {
            $table->id();
            $table->string('area')->nullable();
            $table->string('asunto')->nullable();
            $table->string('fecha_informe')->nullable();
            $table->string('entidad_emite')->nullable();
            $table->string('entidad_recibe')->nullable();
            $table->string('aprueba')->nullable();
            $table->string('enterado')->nullable();
            $table->text('actividades')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_reports');
    }
};
