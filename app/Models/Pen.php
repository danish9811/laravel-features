<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;

class Pen extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    #[ArrayShape(['name' => "string", 'weight' => "float"])]
    public function getPenDataAttribute(): array {
        return [
            'name' => $this->name,
            'weight' => $this->weight
        ];
    }

}
