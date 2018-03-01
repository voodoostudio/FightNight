<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_fr', 255)->nullable();
            $table->string('title_en', 255)->nullable();
            $table->string('image_file', 1024)->nullable();
            $table->string('pdf_file', 1024)->nullable();
            $table->string('archive_file', 1024)->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_en')->nullable();
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
        Schema::dropIfExists('admin_news');
    }
}
