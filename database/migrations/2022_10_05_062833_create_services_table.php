<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'services', function ( Blueprint $table ) {
			$table->bigInteger('id')->autoIncrement();
			$table->string( 'service_name' );
			$table->string( 'service_sub_name' );
			$table->defaultFields();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'services' );
	}
}
