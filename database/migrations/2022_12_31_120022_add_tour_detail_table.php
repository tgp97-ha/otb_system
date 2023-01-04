<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTourDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up() {
		Schema::create( 'tour_detail', function ( Blueprint $table ) {
			$table->primaryColumn();
			$table->string( 'tour_detail_title' )->nullable();
			$table->string( 'tour_detail_content' );
			$table->bigInteger( 'tour_serial' );
			$table->defaultFields();
		} );
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('tour_detail');
    }
}
