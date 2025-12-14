<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    use HasFactory;

    protected $table = 'pertandingan';

    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'tanggal',
        'skor_kandang',
        'skor_tandang',
    ];

    public function teamHome()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function teamAway()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }
}
