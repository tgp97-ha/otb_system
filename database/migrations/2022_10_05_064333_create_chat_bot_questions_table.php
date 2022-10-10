<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatBotQuestionsTable extends Migration{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'chat_bot_questions', function ( Blueprint $table ) {
			$table->primaryColumn();
			$table->string( 'chat_bot_question_chat_bot_serial' );
			$table->string( 'chat_bot_question_type' );
			$table->string( 'chat_bot_question_questions' );
			$table->string( 'chat_bot_question_answers' );
			$table->string( 'chat_bot_question_tour_serial' )->nullable();
			$table->defaultFields();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'chat_bot_questions' );
	}
}
