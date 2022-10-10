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
			$table->string( 'tour_operator_user_serial' )->unique();
			$table->string( 'tour_operator_name' );
			$table->string( 'tour_operator_phone_number' )->nullable();
			$table->string( 'tour_operator_bank_account' )->nullable();
			$table->string( 'tour_operator_tax_number' )->nullable();
			$table->string( 'tour_operator_address' )->nullable();
			$table->string( 'tour_operator_description' )->nullable();
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
