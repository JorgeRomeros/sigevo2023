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
        Schema::create('weekly_reports', function (Blueprint $table) {
            $table->id();
            $table->string('elabora')->nullable();
            $table->string('recibe')->nullable();
            $table->string('titulo')->nullable();
            $table->string('imagen')->nullable();
            $table->string('no_informe')->nullable();
            $table->string('fecha_inicio_semana')->nullable();
            $table->string('fehca_final_semana')->nullable();
            $table->text('descripcion')->nullable();
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
        Schema::dropIfExists('weekly_reports');
    }
};
