<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tour extends Model
{
    protected $primaryKey = 'serial';
    protected $fillable = [
        'user_serial',
        'tourist_name',
        'date_of_birth',
        'tourist_phone_number',
        'tourist_personal_id',
    ];
    /**
     * @var mixed
     */

    public function userTourist(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_serial', 'serial');
    }
}
