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
        Schema::create('monthly_reports', function (Blueprint $table) {
            $table->id();
            $table->string('elabora')->nullable();
            $table->string('recibe')->nullable();
            $table->string('titulo')->nullable();
            $table->string('imagen')->nullable();
            $table->string('no_informe_mensual')->nullable();
            $table->string('fecha_inicio_mes')->nullable();
            $table->string('fecha_final_mes')->nullable();
            $table->string('semanas')->nullable();
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
        Schema::dropIfExists('monthly_reports');
    }
};
