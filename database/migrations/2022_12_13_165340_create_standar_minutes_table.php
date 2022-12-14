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
        Schema::create('standar_minutes', function (Blueprint $table) {
            $table->id();
            $table->integer('folio');
            $table->string('asunto')->nullable();
            $table->string('tema')->nullable();
            $table->string('lugar')->nullable();
            $table->string('tramo')->nullable();
            $table->string('agenda')->nullable();
            $table->string('dirigido_a')->nullable();
            $table->string('fecha_inicio')->nullable();
            $table->string('hora_inicio')->nullable();
            $table->string('fecha_proxima_reunion')->nullable();
            $table->string('hora_programada')->nullable();
            $table->string('hora_cierre')->nullable();
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
        Schema::dropIfExists('standar_minutes');
    }
};
