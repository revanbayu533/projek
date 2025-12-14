@extends('layouts.app')

@section('title','Pertandingan')

@section('content')
<h2>Daftar Pertandingan</h2>

<a href="/" class="btn-back">Kembali</a>
<a href="{{ route('pertandingan.create') }}">Tambah Pertandingan</a>
<a href="{{ route('pertandingan.generate.full') }}">Generate Jadwal dan Skor</a>
<table>
    <tr>
        <th>Tim Home</th>
        <th>Tim Away</th>
        <th>Skor</th>
        <th>Aksi</th>
    </tr>

    @foreach($pertandingan as $p)
    <tr>
        <td>{{ $p->teamHome->name }}</td>
        <td>{{ $p->teamAway->name }}</td>
        <td>{{ $p->skor_kandang }} : {{ $p->skor_tandang }}</td>
        <td>
            <a href="{{ route('pertandingan.edit',$p->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
