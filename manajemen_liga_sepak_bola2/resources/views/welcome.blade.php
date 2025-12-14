@extends('layouts.app')

@section('title', 'Manajemen Liga Sepak Bola')

@section('content')

<h2>Manajemen Liga Sepak Bola</h2>

<p>Kelola data liga dengan cepat.</p>

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 30px;">

    <div class="card">
        <h3>Tim</h3>
        <p>Kelola data klub.</p>
        <a href="/teams">Buka</a>
    </div>

    <div class="card">
        <h3>Pemain</h3>
        <p>Kelola pemain tiap tim.</p>
        <a href="/players">Buka</a>
    </div>

    <div class="card">
        <h3>Pertandingan</h3>
        <p>Atur jadwal dan hasil.</p>
        <a href="/pertandingan">Buka</a>
    </div>

    <div class="card">
        <h3>Goal</h3>
        <p>Catat gol tiap pertandingan.</p>
        <a href="/goals">Buka</a>
    </div>

    <div class="card">
        <h3>Klasemen</h3>
        <p>Lihat peringkat liga.</p>
        <a href="/standings">Buka</a>
    </div>

</div>

@endsection
