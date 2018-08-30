<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['director','imageUrl','duration','releaseDate','genre','title' ];

    protected static function filterMovie($search){

        $movies = Movie::where('title', 'like','%'.$search.'%')->orderBy('title')->get();

        return $movies;
    }
}

