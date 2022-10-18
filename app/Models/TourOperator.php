<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TourOperator extends Model
{
    protected $primaryKey = 'serial';
    protected $fillable = [
        'tour_operator_user_serial',
        'tour_operator_name',
        'tour_operator_phone_number',
        'tour_operator_bank_account',
        'tour_operator_tax_number',
        'tour_operator_address',
        'tour_operator_description',
    ];
    /**
     * @var mixed
     */

    public function userTourOperator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_serial', 'serial');
    }
}
