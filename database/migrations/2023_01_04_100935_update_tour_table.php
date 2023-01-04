<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::table('tours', function (Blueprint $table) {
			$table->string('tour_comment_rating')->after('tour_title')->nullable()->default('0');
		});
		Schema::table('comment', function (Blueprint $table) {
			$table->string('comment_analysis_rating')->after('comment_content')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tours', function (Blueprint $table) {
			$table->dropColumn('tour_comment_rating');
		});
		Schema::table('comment', function (Blueprint $table) {
			$table->dropColumn('comment_analysis_rating')->after('comment_content');
		});
	}
}
