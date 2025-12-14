@extends('layouts.app')

@section('title','Tambah Pertandingan')

@section('content')
<h2>Tambah Pertandingan</h2>

<form action="{{ route('pertandingan.store') }}" method="POST">
@csrf

<label>Tim Home</label>
<select name="home_team_id" required>
    @foreach($teams as $team)
        <option value="{{ $team->id }}">{{ $team->name }}</option>
    @endforeach
</select>

<label>Tim Away</label>
<select name="away_team_id" required>
    @foreach($teams as $team)
        <option value="{{ $team->id }}">{{ $team->name }}</option>
    @endforeach
</select>

<label>Tanggal Pertandingan</label>
<input type="date" name="tanggal" required>

<label>Skor Home</label>
<input type="number" name="skor_kandang" min="0">

<label>Skor Away</label>
<input type="number" name="skor_tandang" min="0">

<button type="submit">Simpan</button>
</form>
@endsection