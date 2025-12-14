@extends('layouts.app')

@section('title', 'Daftar Tim')

@section('content')

<h2>Daftar Tim</h2>

<a href="/" class="btn-back">Kembali</a>
<a href="{{ route('teams.create') }}">Tambah Tim</a>

<table>
    <tr>
        <th>Nama</th>
        <th>Kota</th>
        <th>Pelatih</th>
        <th>Aksi</th>
    </tr>

    @foreach ($teams as $team)
    <tr>
        <td>{{ $team->name }}</td>
        <td>{{ $team->city }}</td>
        <td>{{ $team->coach }}</td>
        <td>
            <a href="{{ route('teams.edit', $team->id) }}">Edit</a>

            <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn-danger" type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
