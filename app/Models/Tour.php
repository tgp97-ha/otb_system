<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model{
	protected $primaryKey = 'serial';
	protected $fillable = [
		'tour_tour_operator_serial',
		'tour_name',
		'tour_title',
		'tour_destination',
		'tour_detail',
		'tour_description',
		'tour_day_length',
		'tour_start_date',
		'tour_night_length',
		'tour_slots',
		'tour_slots_left',
		'tour_place',
		'tour_prices',
		'tour_is_verify',
	];

	public function userTourist(): BelongsTo {
		return $this->belongsTo( User::class, 'tour_tour_operator_serial', 'id' );
	}

	public function services(): BelongsToMany {
		return $this->belongsToMany( Service::class );
	}

	public function place(): BelongsTo {
		return $this->belongsTo( Place::class, 'tour_place', 'serial' );
	}

	public function bookings(): HasMany {
		return $this->hasMany( Booking::class, 'tour_serial', 'serial' );
	}

	public function comments(): HasMany {
		return $this->hasMany( Comment::class, 'tour_serial', 'serial' );
	}

	public function images(): HasMany {
		return $this->hasMany(Image::class,'tour_serial', 'serial');
	}

	public function tourDetails(){
		return $this->hasMany(TourDetail::class,'tour_serial','serial');
	}
}
