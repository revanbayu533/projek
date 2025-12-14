@extends('layouts.app')

@section('title', 'Tambah Tim')

@section('content')

<h2>Tambah Tim</h2>

<div class="card">
    <form action="{{ route('teams.store') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Nama Tim">
        <input type="text" name="city" placeholder="Kota">
        <input type="text" name="coach" placeholder="Pelatih">

        <button type="submit">Simpan</button>
    </form>
</div>

<a href="{{ route('teams.index') }}">Kembali</a>

@endsection
