<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model{
	protected $table = 'comment';

	public function tours(): BelongsTo {
		return $this->belongsTo( Tour::class, 'tour_serial', 'serial' );
	}

	public function tourist(): BelongsTo {
		return $this->belongsTo( User::class, 'user_id', 'id' );
	}
}
