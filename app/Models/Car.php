<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id',       
        'brand',
        'model',
        'year',
        'description',
        'location',
        'price_per_day',
        'status',        
    ];



}
