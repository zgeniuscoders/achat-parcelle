<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'height', 'width', 'details', 'price', 'status', 'image', 'images'
    ];

    public function quater(): BelongsTo{
        return $this->belongsTo(Quater::class);
    }
}
