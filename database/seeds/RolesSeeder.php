<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$admin                  = Role::create( [ 'name' => 'admin' ] );
		$tourist                = Role::create( [ 'name' => 'tourist' ] );
		$tour_operator          = Role::create( [ 'name' => 'tour-operator' ] );
		$adminPermission        = Permission::create( [ 'name' => 'admin' ] );
		$touristPermission      = Permission::create( [ 'name' => 'tourist' ] );
		$tourOperatorPermission = Permission::create( [ 'name' => 'tour-operator' ] );
		$admin->givePermissionTo( $adminPermission );
		$tourist->givePermissionTo( $touristPermission );
		$tour_operator->givePermissionTo( $tourOperatorPermission );
	}
}