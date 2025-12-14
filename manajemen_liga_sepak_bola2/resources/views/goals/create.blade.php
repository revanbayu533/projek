@extends('layouts.app')

@section('title','Tambah Gol')

@section('content')

<h2>Tambah Gol</h2>

<a href="{{ route('goals.index') }}" class="btn-back">Kembali</a>

<form action="{{ route('goals.store') }}" method="POST">
@csrf

<label>Pertandingan</label>
<select name="pertandingan_id">
    @foreach($pertandingan as $p)
        <option value="{{ $p->id }}">
            {{ $p->teamHome->name }} vs {{ $p->teamAway->name }}
        </option>
    @endforeach
</select>

<label>Pemain</label>
<select name="player_id">
    @foreach($players as $player)
        <option value="{{ $player->id }}">
            {{ $player->name }} - {{ $player->team->name }}
        </option>
    @endforeach
</select>

<label>Menit Gol</label>
<input type="number" name="minute">

<button type="submit">Simpan</button>
</form>

@endsection
