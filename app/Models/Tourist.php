<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tourist extends Model
{
    protected $primaryKey = 'serial';
    protected $fillable = [
        'user_serial',
        'tourist_name',
        'tourist_phone_number',
        'tourist_personal_id',
    ];

    public function userTourist(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_serial', 'serial');
    }
}
