<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'tours', function ( Blueprint $table ) {
			$table->primaryColumn();
			$table->string( 'tour_serial' );
			$table->string( 'name' );
			$table->string( 'title' );
			$table->string( 'destination' );
			$table->string( 'day_length' );
			$table->string( 'night_length' );
			$table->string( 'start_date' );
			$table->string( 'detail' );
			$table->string( 'description' );
			$table->string( 'slots' );
			$table->string( 'slots_left' );
			$table->defaultFields();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'tours' );
	}
}
