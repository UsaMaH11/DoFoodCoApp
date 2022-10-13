<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_title',
        'user_id',
        'description',
        'cook_time',
        'type',
        'food_status',
        'images',
        'price'
    ];
}
