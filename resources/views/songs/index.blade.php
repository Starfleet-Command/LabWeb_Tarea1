@extends('layouts.main')

@section('content')
<h1>List of Songs</h1>
<p>
    <a href="{{ route('songs.create') }}">Create a Song</a>
</p>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Duration</th>
            <th>Album Id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($songs as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->duration }}</td>
                <td>{{ $item->album_id }}</td>
                <td>
                   <button> <a href="{{ route('songs.show', ['song' => $item]) }}">
                        Show
                    </a> </button>|
                    <button> <a href="{{ route('songs.edit', ['song' => $item]) }}">
                        Update
                    </a> </button>
                    <form action="{{ route('songs.destroy', ['song' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection