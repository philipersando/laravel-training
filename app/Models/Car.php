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

    public static function statuses() {
        return ['available', 'rented', 'hidden'];
    }


    public function owner() 
    {
        return $this->belongsTo(User::class, 'user_id');

    }

    public function rentals() 
    {
        return $this->hasMany(Rental::class);

    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


}
