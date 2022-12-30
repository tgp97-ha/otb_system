<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesSeeder extends Seeder{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table( 'places' )->insert( [
			'place_name'     => "Da Nang",
			'place_full_name' => "Da Nang",
			'place_short_name' => "DN",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Ha Noi",
			'place_full_name' => "Ha Noi",
			'place_short_name' => "HN",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Sai Gon",
			'place_full_name' => "Sai Go",
			'place_short_name' => "SG",
		] );
	}
}