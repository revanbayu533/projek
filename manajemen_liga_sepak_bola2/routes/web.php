<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PertandinganController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\StandingController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('teams', TeamController::class);
Route::resource('players', PlayerController::class);
Route::resource('pertandingan', PertandinganController::class)->except(['show']);
Route::get('/pertandingan/generate-full', [PertandinganController::class, 'generateJadwalDanSkor'])
    ->name('pertandingan.generate.full');
Route::resource('goals', GoalController::class)->only(['index','create','store']);
Route::get('/standings', [StandingController::class, 'index'])->name('standings.index');
Route::get('/standings/generate', [StandingController::class, 'generate'])->name('standings.generate');
