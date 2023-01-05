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
			'place_full_name' => "Sai Gon",
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
			'place_name'     => "Nha Trang",
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
			'place_full_name' => "Phu Quoc",
			'place_short_name' => "PQ",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Phu Tho",
			'place_full_name' => "Phu Tho",
			'place_short_name' => "PT",
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
		DB::table( 'places' )->insert( [
			'place_name'     => "Bac Kan",
			'place_full_name' => "Bac Kan",
			'place_short_name' => "BK",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Bac Ninh",
			'place_full_name' => "Bac Ninh",
			'place_short_name' => "BN",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Dien Bien",
			'place_full_name' => "Dien Bien",
			'place_short_name' => "DB",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Lang Son",
			'place_full_name' => "Lang Son",
			'place_short_name' => "LS",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Mai Chau",
			'place_full_name' => "Mai Chau",
			'place_short_name' => "MC",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Binh Thuan",
			'place_full_name' => "Binh Thuan",
			'place_short_name' => "BT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Buon Ma Thuat",
			'place_full_name' => "Buon Ma Thuat",
			'place_short_name' => "BMT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Kon Tum",
			'place_full_name' => "Kon Tum",
			'place_short_name' => "KT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Phu Yen",
			'place_full_name' => "Phu Yen",
			'place_short_name' => "PY",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Phan Thiet",
			'place_full_name' => "Phan Thiet",
			'place_short_name' => "PT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Quy Nhon",
			'place_full_name' => "Quy Nhon",
			'place_short_name' => "QN",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Quang Nam",
			'place_full_name' => "Quang Nam",
			'place_short_name' => "QN",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Quang Ngai",
			'place_full_name' => "Quang Ngai",
			'place_short_name' => "QN",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Tay Nguyen",
			'place_full_name' => "Tay Nguyen",
			'place_short_name' => "TN",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Bac Lieu",
			'place_full_name' => "Bac Lieu",
			'place_short_name' => "BL",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Ben Tre",
			'place_full_name' => "Ben Tre",
			'place_short_name' => "BT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Ca Mau",
			'place_full_name' => "Ca Mau",
			'place_short_name' => "CM",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Kien Giang",
			'place_full_name' => "Kien Giang",
			'place_short_name' => "KG",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Long An",
			'place_full_name' => "Long An",
			'place_short_name' => "LA",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Nam Du",
			'place_full_name' => "Nam Du",
			'place_short_name' => "ND",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Mien Tay",
			'place_full_name' => "Mien Tay",
			'place_short_name' => "MT",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Soc Trang",
			'place_full_name' => "Soc Trang",
			'place_short_name' => "ST",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Tien Giang",
			'place_full_name' => "Tien Giang",
			'place_short_name' => "TG",
		] );
		DB::table( 'places' )->insert( [
			'place_name'     => "Dong Thap",
			'place_full_name' => "Dong Thap",
			'place_short_name' => "DT",
		] );
	}
}