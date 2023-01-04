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
		DB::table( 'places' )->insert( [
			'place_name'     => "Quang Binh",
			'place_full_name' => "Quang Binh",
			'place_short_name' => "QB",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Ha Long",
			'place_full_name' => "Ha Long",
			'place_short_name' => "HL",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "An Giang",
			'place_full_name' => "An Giang",
			'place_short_name' => "AG",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Nha Trang ",
			'place_full_name' => "Nha Trang",
			'place_short_name' => "NT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Sa Pa",
			'place_full_name' => "Sa Pa",
			'place_short_name' => "SP",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Phu Quoc",
			'place_full_name' => "Phuc Quoc",
			'place_short_name' => "PQ",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Hoi An",
			'place_full_name' => "Hoi An",
			'place_short_name' => "HA",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Can Tho",
			'place_full_name' => "Can Tho",
			'place_short_name' => "CT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Hue",
			'place_full_name' => "Hue",
			'place_short_name' => "Hue",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Vung Tau",
			'place_full_name' => "Vung Tau",
			'place_short_name' => "VT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Da Lat",
			'place_full_name' => "Da Lat",
			'place_short_name' => "DL",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Moc Chau",
			'place_full_name' => "Moc Chau",
			'place_short_name' => "MC",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Ha Giang",
			'place_full_name' => "Ha Giang",
			'place_short_name' => "HG",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Ninh Binh",
			'place_full_name' => "Ninh Binh",
			'place_short_name' => "NB",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Thai Nguyen",
			'place_full_name' => "Thai Nguyen",
			'place_short_name' => "TN",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Lai Chau",
			'place_full_name' => "Lai Chau",
			'place_short_name' => "LC",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Thanh Hoa",
			'place_full_name' => "Thanh Hoa",
			'place_short_name' => "TH",
		] );
	}
}