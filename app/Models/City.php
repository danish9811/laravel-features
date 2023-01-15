<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model {
    use HasFactory;

    protected $fillable = ['id'];

    public function hotels(): HasMany {
        return $this->hasMany(Hotel::class, 'city_id');
    }

}
