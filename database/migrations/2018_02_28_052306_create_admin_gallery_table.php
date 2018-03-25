<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_fr', 512)->nullable();
            $table->string('title_en', 512)->nullable();
            $table->string('front_image', 1024)->nullable();
            $table->text('gallery_images')->nullable();
            $table->string('category_name', 256)->nullable();
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
        Schema::dropIfExists('admin_gallery');
    }
}
