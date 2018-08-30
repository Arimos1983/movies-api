<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['director','imageUrl','duration','releaseDate','genre','title' ];

    protected static function filterMovie($title,$skip,$take){

        if($skip && $take)
        {
            $movies = Movie::where('title', 'like','%'.$title.'%')->skip($skip)->take($take)->get();
            return $movies;
        }
        else
        {
            $movies = Movie::where('title', 'like','%'.$title.'%')->take($take)->get();
            return $movies;
        }
    }
}

