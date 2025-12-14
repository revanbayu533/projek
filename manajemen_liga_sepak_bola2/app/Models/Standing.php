<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'main',
        'menang',
        'seri',
        'kalah',
        'gol_masuk',
        'gol_kebobolan',
        'poin'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
