<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(Area::class, "area_id");
    }
    
    public function genre()
    {
        return $this->belongsTo(Genre::class, "genre_id");
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
