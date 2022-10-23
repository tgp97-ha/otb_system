<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
	protected $table = 'services';

	public function tours(): BelongsToMany {
		return $this->belongsToMany( Tour::class );
	}
}
