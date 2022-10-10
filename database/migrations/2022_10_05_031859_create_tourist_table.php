<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourists', function (Blueprint $table) {
	        $table->primaryColumn();
	        $table->string('user_serial')->unique();
	        $table->string( 'tourist_name' );
	        $table->string( 'address' )->nullable();
	        $table->string( 'date_of_birth' )->nullable();
			$table->string('tourist_phone_number')->nullable();
			$table->string('tourist_personal_id');
	        $table->defaultFields();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourists');
    }
}
