<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airlines extends Model
{
    use HasFactory;
    public function city_flight()
    {
        return $this->belongsToMany(City_Flight::class);
    }
}

