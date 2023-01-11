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
        Schema::create('format_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_type',20);
            $table->string('file_route',250);
            $table->string('folder_parent',250);
            $table->integer('folder_id');
            $table->string('file_name',250);
            $table->string('file_ext',20)->nullable();
            $table->string('file_name_ext',250)->nullable();
            $table->text('file_description')->nullable();
            $table->text('file_content')->nullable();
            $table->integer('file_size');
            $table->string('file_mimetype',100);
            $table->string('file_color',50)->nullable();
            $table->string('file_impact',50)->nullable();
            $table->integer('file_progress')->nullable();
            $table->integer('file_user_id');
            $table->integer('file_project_id')->nullable();
            $table->string('file_start_date',20)->nullable();
            $table->string('file_close_date',20)->nullable();
            $table->string('file_last_date',20)->nullable();
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
        Schema::dropIfExists('format_files');
    }
};
