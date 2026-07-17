<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchSchedule extends Model
{
    use HasFactory;

    // Tambahkan baris properti fillable di bawah ini:
    protected $fillable = [
        'team_a',
        'team_b',
        'round',
        'match_time',
        'status'
    ];
}
