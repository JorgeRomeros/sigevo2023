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
        Schema::create('field_notes', function (Blueprint $table) {
            $table->id();
            $table->string('fecha')->nullable();
            $table->string('area')->nullable();
            $table->string('asunto')->nullable();
            $table->string('elaboro')->nullable();
            $table->string('recibio')->nullable();
            $table->string('aporbado')->nullable();
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
        Schema::dropIfExists('field_notes');
    }
};
