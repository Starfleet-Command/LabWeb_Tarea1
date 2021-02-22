<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Album;

class Genre extends Model
{
    
    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }
}
