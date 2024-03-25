<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'detail', 'event_date', 'group_id'];

    public function group(): BelongsTo
    {
        return $this->BelongsTo(Group::class);
    }
}
