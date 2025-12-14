@extends('layouts.app')

@section('title','Data Gol')

@section('content')

<h2>Data Gol</h2>

<a href="/" class="btn-back">Kembali</a>
<a href="{{ route('goals.create') }}">Tambah Gol</a>

<table>
    <tr>
        <th>Pertandingan</th>
        <th>Pemain</th>
        <th>Tim</th>
        <th>Menit</th>
    </tr>

    @foreach($goals as $goal)
    <tr>
        <td>
            {{ $goal->pertandingan->teamHome->name }}
            vs
            {{ $goal->pertandingan->teamAway->name }}
        </td>
        <td>{{ $goal->player->name }}</td>
        <td>{{ $goal->player->team->name }}</td>
        <td>{{ $goal->minute }}'</td>
    </tr>
    @endforeach
</table>

@endsection
