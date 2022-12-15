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
        Schema::create('information_notes', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->nullable();
            $table->string('fecha')->nullable();
            $table->string('lugar',50)->nullable();
            $table->string('elaboro',50)->nullable();
            $table->string('dirigido_a',50)->nullable();
            $table->string('c.c.p',50)->nullable();
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
        Schema::dropIfExists('information_notes');
    }
};
