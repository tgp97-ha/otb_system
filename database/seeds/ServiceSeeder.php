<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table( 'services' )->insert( [
			'service_name'     => "Triple Room",
			'service_sub_name' => "",
		] );

		DB::table( 'services' )->insert( [
			'service_name'     => "Double Room",
			'service_sub_name' => "",
		] );
		DB::table( 'services' )->insert( [
			'service_name'     => "Room Service",
			'service_sub_name' => "",
		] );
		DB::table( 'services' )->insert( [
			'service_name'     => "Buffet",
			'service_sub_name' => "",
		] );
		DB::table( 'services' )->insert( [
			'service_name'     => "Pool",
			'service_sub_name' => "",
		] );
		DB::table( 'services' )->insert( [
			'service_name'     => "Wifi",
			'service_sub_name' => "",
		] );
		DB::table( 'services' )->insert( [
			'service_name'     => "Bar",
			'service_sub_name' => "",
		] );
		DB::table( 'services' )->insert( [
			'service_name'     => "Restaurant",
			'service_sub_name' => "",
		] );
	}
}