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
        Schema::create('escritos', function (Blueprint $table) {
            $table->id();
            $table->integer('folio')->nullable();
            $table->string('remitente',50)->nullable();
            $table->string('destinatario',50)->nullable();
            $table->string('fecha')->nullable();
            $table->string('lugar',50)->nullable();
            $table->string('asunto',50)->nullable();
            $table->text('contenido')->nullable();
            $table->string('ccp',50)->nullable();
            $table->string('elaboro',50)->nullable();
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
        Schema::dropIfExists('escritos');
    }
};
