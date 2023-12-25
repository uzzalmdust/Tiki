<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['trip_date', 'from_location', 'to_location', 'start_time', 'price'];

    public function seats(): HasMany
    {
        return $this->hasMany(SeatAllocation::class);
    }
}
