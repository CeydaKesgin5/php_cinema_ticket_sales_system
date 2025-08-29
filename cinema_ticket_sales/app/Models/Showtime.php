<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'hall_id',
        'show_date',
        'show_time',
        'base_price',
        'vip_price',
        'available_seats',
        'is_active',
    ];

    protected $casts = [
        'show_date' => 'date',
        'show_time' => 'string',
        'base_price' => 'decimal:2',
        'vip_price' => 'decimal:2',
        'available_seats' => 'integer',
        'is_active' => 'boolean',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
}
