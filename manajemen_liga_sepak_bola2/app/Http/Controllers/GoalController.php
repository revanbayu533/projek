<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Pertandingan;
use App\Models\Player;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index()
    {
        $goals = Goal::with([
            'pertandingan.teamHome',
            'pertandingan.teamAway',
            'player.team'
        ])->get();

        return view('goals.index', compact('goals'));
    }

    public function create()
    {
        $pertandingan = Pertandingan::with('teamHome','teamAway')->get();
        $players = Player::with('team')->get();

        return view('goals.create', compact('pertandingan','players'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertandingan_id' => 'required',
            'player_id' => 'required',
            'minute' => 'required|integer'
        ]);

        Goal::create([
            'pertandingan_id' => $request->pertandingan_id,
            'player_id' => $request->player_id,
            'minute' => $request->minute
        ]);

        return redirect()->route('goals.index');
    }
}
