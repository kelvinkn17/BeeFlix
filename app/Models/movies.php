<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    public function genres(){
        return $this->belongsTo(genres::class, 'genres_id');
    }

    Public function episodes(){
        return $this->hasMany(episodes::class);
    }

}
