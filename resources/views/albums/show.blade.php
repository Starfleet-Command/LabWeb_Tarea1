@extends('layouts.main')

@section('content')
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Year</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $album->id }}</td>
            <td>{{ $album->title }}</td>
            <td>{{ $album->artist }}</td>
            <td>{{ $album->year }}</td>
        </tr>
    </tbody>
</table>

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
                <td>
                   <button> <a href="{{ route('songs.show', ['song' => $item]) }}">
                        Show
                    </a> </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
