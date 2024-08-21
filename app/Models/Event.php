<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'detail', 'event_date', 'group_id', 'khqr_khr', 'khqr_usd'];

    public function group(): BelongsTo
    {
        return $this->BelongsTo(Group::class);
    }

    public function guests(): HasMany
    {
        return $this->HasMany(Guest::class);
    }
}
