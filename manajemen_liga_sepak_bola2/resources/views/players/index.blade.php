@extends('layouts.app')

@section('title','Data Pemain')

@section('content')

<h2>Data Pemain</h2>

<a href="/" class="btn-back">Kembali</a>
<a href="/players/create">Tambah Pemain</a>

<table>
    <tr>
        <th>Nama</th>
        <th>Tim</th>
        <th>Posisi</th>
        <th>Nomor</th>
    </tr>

    @foreach($players as $player)
    <tr>
        <td>{{ $player->name }}</td>
        <td>{{ $player->team->name }}</td>
        <td>{{ $player->position }}</td>
        <td>{{ $player->number }}</td>
    </tr>
    @endforeach
</table>

@endsection
