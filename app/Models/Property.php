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
        'name', 'height', 'width', 'details', 'price', 'status', 'image', 'images', 'quater_id', 'user_id', 'category_id','boosted','boosted_until'
    ];

    public function getFormatedPrice()
    {
        return number_format($this->price, 0, ',', '.');
    }

    public function getExcerpt()
    {
        return substr($this->details, 0, 150) . '...';
    }

    /**
     * @return BelongTo
     */
    public function quater(): BelongsTo
    {
        return $this->belongsTo(Quater::class);
    }

    /**
     * @return BelongTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected function images(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => json_decode($value),
        );
    }
}
