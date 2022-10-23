<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends Model
{
	protected $table = 'places';

	public function tours(): HasMany {
		return $this->hasMany( Tour::class, 'tour_places_serial','serial' );
	}
}
