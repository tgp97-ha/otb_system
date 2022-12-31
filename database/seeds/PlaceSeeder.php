<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table( 'places' )->insert( [
		    'place_name'     => "Vung Tau",
		    'place_full_name' => "Vung Tau",
		    'place_short_name' => "DN",
	    ] );
	    DB::table( 'places' )->insert( [
		    'place_name'     => "Nha Trang",
		    'place_full_name' => "Nha Trang",
		    'place_short_name' => "HN",
	    ] );
	    DB::table( 'places' )->insert( [
		    'place_name'     => "Da Lat",
		    'place_full_name' => "Da Lat",
		    'place_short_name' => "SG",
	    ] );
	    DB::table( 'places' )->insert( [
		    'place_name'     => "Da Lat",
		    'place_full_name' => "Da Lat",
		    'place_short_name' => "SG",
	    ] );
    }
}
