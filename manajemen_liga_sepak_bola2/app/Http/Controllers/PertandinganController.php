<?php

namespace App\Http\Controllers;

use App\Models\Pertandingan;
use App\Models\Team;
use App\Models\Goal;
use Illuminate\Http\Request;

class PertandinganController extends Controller
{
    public function index()
    {
        $pertandingan = Pertandingan::with(['teamHome','teamAway'])->get();
        return view('pertandingan.index', compact('pertandingan'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('pertandingan.create', compact('teams'));
    }

    public function store(Request $request)
    {
        Pertandingan::create([
            'home_team_id' => $request->home_team_id,
            'away_team_id' => $request->away_team_id,
            'tanggal' => $request->tanggal,
            'skor_kandang' => $request->skor_kandang,
            'skor_tandang' => $request->skor_tandang,
        ]);

        return redirect()->route('pertandingan.index');
    }

    public function edit(Pertandingan $pertandingan)
    {
        $teams = Team::all();
        return view('pertandingan.edit', compact('pertandingan','teams'));
    }

    public function update(Request $request, Pertandingan $pertandingan)
    {
        $pertandingan->update([
            'home_team_id' => $request->home_team_id,
            'away_team_id' => $request->away_team_id,
            'tanggal' => $request->tanggal,
            'skor_kandang' => $request->skor_kandang,
            'skor_tandang' => $request->skor_tandang,
        ]);

        return redirect()->route('pertandingan.index');
    }

    public function destroy(Pertandingan $pertandingan)
    {
        $pertandingan->delete();
        return redirect()->route('pertandingan.index');
    }

public function generateJadwalDanSkor()
{
    Goal::truncate();
    Pertandingan::query()->delete();


    $teams = Team::all();
    $tanggal = now();

    for ($i = 0; $i < $teams->count(); $i++) {
        for ($j = $i + 1; $j < $teams->count(); $j++) {

            Pertandingan::create([
                'home_team_id' => $teams[$i]->id,
                'away_team_id' => $teams[$j]->id,
                'tanggal' => $tanggal,
                'skor_kandang' => rand(0, 5),
                'skor_tandang' => rand(0, 5),
            ]);

            $tanggal = $tanggal->addDay();
        }
    }

    return redirect()->route('pertandingan.index');
}
}