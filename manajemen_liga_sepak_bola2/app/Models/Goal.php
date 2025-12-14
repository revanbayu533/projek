<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertandingan_id',
        'player_id',
        'minute'
    ];

    public function pertandingan()
    {
        return $this->belongsTo(Pertandingan::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
