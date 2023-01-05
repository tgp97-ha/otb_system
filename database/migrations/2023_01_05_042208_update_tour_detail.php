<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTourDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('tours', function (Blueprint $table) {
		    $table->longText( 'tour_description' )->change();;
	    });
	    Schema::table('tour_detail', function (Blueprint $table) {
		    $table->longText( 'tour_detail_content' )->change();
	    } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('tours', function (Blueprint $table) {
		    $table->string( 'tour_description' )->change();;
	    });
	    Schema::table('tour_detail', function (Blueprint $table) {
		    $table->string( 'tour_detail_content' )->change();
	    } );
    }
}
