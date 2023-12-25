<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeatAllocation extends Model
{
    use HasFactory;

    protected $attributes = [
        'user_id' => null,
        'trip_id' => null,
    ];

    protected $fillable = ['seat_no'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }
}
