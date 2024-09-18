<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = ['car_id', 'nilai', 'nama', 'isi'];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
