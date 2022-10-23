<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourOperatorsTable extends Migration{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'tour_operators', function ( Blueprint $table ) {
			$table->primaryColumn();
			$table->string( 'operator_serial' )->unique();
			$table->string( 'name' );
			$table->string( 'phone_number' )->nullable();
			$table->string( 'bank_account' )->nullable();
			$table->string( 'tax_number' )->nullable();
			$table->string( 'address' )->nullable();
			$table->string( 'description' )->nullable();
			$table->defaultFields();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'tour_operators' );
	}
}
