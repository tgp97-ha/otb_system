<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$user           = new User();
		$user->username = "admin";
		$user->email    = "admin@gmail.com";
		$user->password = Hash::make( "secret" );
		$user->assignRole( 'admin' );
		$user->save();
	}
}