<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'activity_id',
    'start_time',
    'end_time',
    'location',
    'capacity',
    'price',
])]
class ActivitySession extends Model
{
    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
