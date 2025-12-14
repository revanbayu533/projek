<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'coach'
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function homeMatches()
    {
        return $this->hasMany(Pertandingan::class, 'home_team_id');
    }

    public function awayMatches()
    {
        return $this->hasMany(Pertandingan::class, 'away_team_id');
    }
}

