<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'height', 'width', 'details', 'price', 'status', 'image', 'images', 'quater_id'
    ];

    public function quater(): BelongsTo{
        return $this->belongsTo(Quater::class);
    }

    protected function images(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => json_decode($value),
        );
    }
}
