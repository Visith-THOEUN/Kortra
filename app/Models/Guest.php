<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'address',
        'event_id',
        'amount_kh',
        'amount_usd',
        'payment_method',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
