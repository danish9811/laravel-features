<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model {
    use HasFactory;

    protected $fillable = ['id'];

    public function city(): BelongsTo {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function bookings(): HasMany {
        return $this->hasMany(Booking::class, 'hotel_id');
    }

}
