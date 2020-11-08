<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class episodes extends Model
{
    use HasFactory;
    public function movies(){
        return $this->belongsTo(movies::class, 'movies_id');
    }

}
