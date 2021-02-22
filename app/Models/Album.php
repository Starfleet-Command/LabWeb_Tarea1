<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Song;
use App\Models\Genre;

class Album extends Model
{
    public function songs(){
        return $this->hasMany(Song::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
