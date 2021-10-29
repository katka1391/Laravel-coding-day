<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function people()
    {
        return $this->belongsToMany('App\Models\People', 'movie_person' , 'movie_id' , 'person_id');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Models\Language');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre' , 'genre_movie' , 'movie_id' , 'genre_id');
    }

}
