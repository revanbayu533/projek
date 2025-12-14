<?php

namespace App\Http\Controllers;

use App\Models\Standing;
use App\Models\Team;
use App\Models\Pertandingan;

class StandingController extends Controller
{
    public function index()
    {
        $standings = Standing::with('team')
            ->orderByDesc('poin')
            ->orderByDesc('gol_masuk')
            ->get();

        return view('standings.index', compact('standings'));
    }

    public function generate()
    {
        Standing::truncate();

        $teams = Team::all();

        foreach ($teams as $team) {

            $main = 0;
            $menang = 0;
            $seri = 0;
            $kalah = 0;
            $gm = 0;
            $gk = 0;

            $matches = Pertandingan::where('home_team_id', $team->id)
                ->orWhere('away_team_id', $team->id)
                ->get();

            foreach ($matches as $m) {

                if ($m->skor_kandang === null || $m->skor_tandang === null) {
                    continue;
                }

                $main++;

                if ($m->home_team_id == $team->id) {
                    $gm += $m->skor_kandang;
                    $gk += $m->skor_tandang;

                    if ($m->skor_kandang > $m->skor_tandang) $menang++;
                    elseif ($m->skor_kandang == $m->skor_tandang) $seri++;
                    else $kalah++;
                } else {
                    $gm += $m->skor_tandang;
                    $gk += $m->skor_kandang;

                    if ($m->skor_tandang > $m->skor_kandang) $menang++;
                    elseif ($m->skor_tandang == $m->skor_kandang) $seri++;
                    else $kalah++;
                }
            }

            Standing::create([
                'team_id' => $team->id,
                'main' => $main,
                'menang' => $menang,
                'seri' => $seri,
                'kalah' => $kalah,
                'gol_masuk' => $gm,
                'gol_kebobolan' => $gk,
                'poin' => ($menang * 3) + $seri
            ]);
        }

        return redirect()->route('standings.index');
    }
}
