<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    

    public $timestamps= false;

    protected $fillable = [
        'name', 'director', 'image_url', 'duration', 'release_date', 'genres'
    ];

    protected $casts = [
        'genres' => 'array'
    ];
}

