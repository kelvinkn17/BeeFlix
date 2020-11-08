<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genres extends Model
{
    use HasFactory;
    public function movies(){
        return $this->hasMany(movies::class);
    }

    public function episodes(){
        return $this->hasManyThrough(
            'App\Models\episodes', 
            'App\Models\movies',
            'genres_id',
            'movies_id',
            'id',
            'id',
        );
    }

}
