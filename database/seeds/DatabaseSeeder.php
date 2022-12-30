<?php

use Database\Seeders\PlaceSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//$this->call(RolesSeeder::class);
		//$this->call(UserSeeder::class);
		//$this->call(PlacesSeeder::class);
		//$this->call(ServiceSeeder::class);
		$this->call(PlaceSeeder::class);
	}
}