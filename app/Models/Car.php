<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'nama',
        'jenis',
        'harga',
        'tanggal_pembuatan',
        'manufacturer_id',
    ];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'car_id');
    }
}
