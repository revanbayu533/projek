@extends('layouts.app')

@section('title','Tambah Pemain')

@section('content')

<h2>Tambah Pemain</h2>

<div class="card">
<form method="POST" action="/players">
@csrf

<input type="text" name="name" placeholder="Nama Pemain">

<select name="team_id">
    @foreach($teams as $team)
    <option value="{{ $team->id }}">{{ $team->name }}</option>
    @endforeach
</select>

<input type="text" name="position" placeholder="Posisi">
<input type="number" name="number" placeholder="Nomor Punggung">

<button type="submit">Simpan</button>
</form>
</div>

<a href="/players">Kembali</a>

@endsection
