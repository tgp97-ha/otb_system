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
			$table->string( 'tour_tour_operator_serial' );
			$table->string( 'tour_name' );
			$table->string( 'tour_title' );
			$table->string( 'tour_destination' );
			$table->string( 'tour_day_length' );
			$table->string( 'tour_night_length' );
			$table->string( 'tour_start_date' );
			$table->longText( 'tour_detail' );
			$table->string( 'tour_description' );
			$table->string( 'tour_slots' );
			$table->string( 'tour_slots_left' );
			$table->string( 'tour_prices' );
			$table->string( 'tour_place' );
			$table->string( 'tour_is_verify' );
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
