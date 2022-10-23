<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable{
	use HasRoles;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	public static $table_name = 'users';
	protected $fillable = [
		'username',
		'email',
		'password',
	];
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	public function tourist(): HasOne {
		return $this->hasOne( Tourist::class, 'user_serial', 'id' );
	}

	public function tourOperator(): HasOne {
		return $this->hasOne( TourOperator::class, 'tour_operator_user_serial', 'id' );
	}

	public function bookings(): HasMany {
		return $this->hasMany( Booking::class, 'user_id', 'id' );
	}
}
