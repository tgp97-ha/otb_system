<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolesSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$role_employee = new Role();
		$role_employee->name = 'tourist';
		$role_employee->description = 'A Tourist User';
		$role_employee->save();

		$role_employee = new Role();
		$role_employee->name = 'tour_operator';
		$role_employee->description = 'A Tour Operator User';
		$role_employee->save();

		$role_manager = new Role();
		$role_manager->name = 'admin';
		$role_manager->description = 'A Admin User';
		$role_manager->save();
	}
}