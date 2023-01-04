<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditTourDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('tour_detail', function (Blueprint $table) {
		    $table->string( 'tour_detail_title' )->nullable()->change();
	    } );
	    Schema::table('tours', function (Blueprint $table) {
		    $table->dropColumn( 'tour_detail' );
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
		    $table->dropColumn( 'tour_detail' );
	    } );
	    Schema::table('tour_detail', function (Blueprint $table) {
		    $table->string( 'tour_detail_title' )->change();
	    } );
    }
}
