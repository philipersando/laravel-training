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

    //use belongsto if there's a foreign key of user in this table
    public function renter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
    
    //use hasOne if there's no foreign key of review in this table
    public function review()
    {
        return $this->hasOne(Review::class);
    }


    public static function isCurrentlyRented($car_id)
    {
        return static::where('car_id', $car_id)
            ->whereIn('status', ['confirmed'])
            ->exists();
    }

}
