@extends('layouts.app')

@section('title','Klasemen')

@section('content')

<h2>Klasemen Liga</h2>

<a href="/" class="btn-back">Kembali</a>
<a href="{{ route('standings.generate') }}">Generate Klasemen</a>

<table>
    <tr>
        <th>No</th>
        <th>Tim</th>
        <th>Main</th>
        <th>M</th>
        <th>S</th>
        <th>K</th>
        <th>GM</th>
        <th>GK</th>
        <th>Poin</th>
    </tr>

    @foreach($standings as $i => $s)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $s->team->name }}</td>
        <td>{{ $s->main }}</td>
        <td>{{ $s->menang }}</td>
        <td>{{ $s->seri }}</td>
        <td>{{ $s->kalah }}</td>
        <td>{{ $s->gol_masuk }}</td>
        <td>{{ $s->gol_kebobolan }}</td>
        <td>{{ $s->poin }}</td>
    </tr>
    @endforeach
</table>

@endsection
