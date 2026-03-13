<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'user_id',       
        'car_id',
        'start_date',
        'end_date',
        'total_price',   
        'status',
    ];

    
}
