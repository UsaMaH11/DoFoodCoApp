<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_title',
        'store_id',
        'description',
        'cook_time',
        'type',
        'food_status',
        'images',
        'price',
        'rating',
        'order_limit',
        'portion_size',
        'ingredients',
        'spcice_level',
        'comments',
        'expires_in'
    ];
    public function Store()
    {
        return $this->belongsTo(Store::class);
    }

      protected $casts = [
        'portion_size' => 'array',
        'ingredients' => 'array'
    ];
}
