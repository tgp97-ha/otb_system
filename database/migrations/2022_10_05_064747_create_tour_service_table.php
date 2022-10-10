<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_service', function (Blueprint $table) {
	        $table->primaryColumn();
	        $table->bigInteger( 'tour_serial' );
	        $table->bigInteger( 'service_serial' );
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
        Schema::dropIfExists('tour_service');
    }
}
