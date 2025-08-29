<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capacity',
        'row_count',
        'seats_per_row',
        'hall_type',
        'screen_type',
        'sound_system',
        'is_active',
    ];

    protected $casts = [
        'capacity' => 'integer',
        'row_count' => 'integer',
        'seats_per_row' => 'integer',
        'is_active' => 'boolean',
    ];
}
