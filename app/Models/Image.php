<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Image extends Model{
	protected $primaryKey = 'serial';
	protected $fillable = [
		"description",
		"file_path",
		"created_at",
		"updated_at",
	];
}
