@extends('layouts.app')

@section('title','Edit Pertandingan')

@section('content')
<h2>Edit Pertandingan</h2>

<form action="{{ route('pertandingan.update',$pertandingan->id) }}" method="POST">
@csrf
@method('PUT')

<label>Tim Home</label>
<select name="home_team_id">
    @foreach($teams as $team)
        <option value="{{ $team->id }}" {{ $pertandingan->home_team_id == $team->id ? 'selected' : '' }}>
            {{ $team->name }}
        </option>
    @endforeach
</select>

<label>Tim Away</label>
<select name="away_team_id">
    @foreach($teams as $team)
        <option value="{{ $team->id }}" {{ $pertandingan->away_team_id == $team->id ? 'selected' : '' }}>
            {{ $team->name }}
        </option>
    @endforeach
</select>

<label>Skor Kandang</label>
<input type="number" name="skor_kandang" value="{{ $pertandingan->skor_kandang }}">

<label>Skor Tandang</label>
<input type="number" name="skor_tandang" value="{{ $pertandingan->skor_tandang }}">

<button type="submit">Update</button>
</form>
@endsection
