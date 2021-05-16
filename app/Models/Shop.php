<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function areas()
    {
        return $this->belongsTo(Area::class, "area_id");
    }
    
    public function genres()
    {
        return $this->belongsTo(Genre::class, "genre_id");
    }

    public function likes()
    {
        return $this->hasMany(Likes::class);
    }

    public function bookings()
    {
        return $this->hasMany(Likes::class);
    }
}
