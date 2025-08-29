<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'genre',
        'rating',
        'director',
        'cast',
        'poster_image',
        'trailer_url',
        'release_date',
        'is_active',
    ];

    protected $casts = [
        'duration' => 'integer',
        'release_date' => 'date',
        'is_active' => 'boolean',
    ];
}
