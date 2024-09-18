<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = 'features';

    protected $fillable = ['feature_name'];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_feature', 'feature_id', 'car_id');
    }
}
