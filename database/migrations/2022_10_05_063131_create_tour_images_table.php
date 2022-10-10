<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_images', function (Blueprint $table) {
	        $table->primaryColumn();
	        $table->binary( 'tour_image_image' );
	        $table->string( 'tour_image_tour_serial' );
	        $table->defaultFields();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_images');
    }
}
