<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TourDetail extends Model{
	protected $table = 'tour_detail';
	public function tour(){
		return $this->belongsTo(Tour::class,'tour_serial','serial');
	}


}
