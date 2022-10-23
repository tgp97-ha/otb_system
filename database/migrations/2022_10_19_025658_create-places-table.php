<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'places', function ( Blueprint $table ) {
			$table->primaryColumn();
			$table->string( 'place_name' );
			$table->string( 'place_full_name' );
			$table->string( 'place_short_name' )->nullable();
			$table->defaultFields();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'places' );
	}
}
