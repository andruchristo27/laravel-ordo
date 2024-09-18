<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = 'manufacturers';

    protected $fillable = ['nama', 'alamat'];

    public function car()
    {
        return $this->hasOne(Car::class, 'manufacturer_id');
    }
}
