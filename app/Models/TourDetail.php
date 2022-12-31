<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TourDetail extends Model{
	protected $primaryKey = 'serial';
	protected $fillable = [
		'tour_detail_title',
		'tour_detail_content',
		'tour_serial'
	];

	public function tour(){
		return $this->belongsTo(Tour::class,'tour_serial','serial');
	}


}
