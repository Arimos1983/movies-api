<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['director','imageUrl','duration','releaseDate','genre','title' ];
}

