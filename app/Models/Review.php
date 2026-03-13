<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'rental_id',     
        'car_id', 
        'user_id',
        'rating',
        'comment',
    ];

}
