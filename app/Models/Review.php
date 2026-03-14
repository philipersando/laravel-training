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


    public function rental()
    {
        $this->belongsTo(Rental::class);
    }


    public function car()
    {
        $this->belongsTo(Car::class);
    }


    public function user()
    {
        $this->belongsTo(User::class);
    }

}
