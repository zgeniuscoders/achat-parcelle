<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quater extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'township_id'
    ];

    public function township(){
        return $this->belongsTo(Township::class);
    }
}
