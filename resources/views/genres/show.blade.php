@extends('layouts.main')

@section('content')
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $genre->id }}</td>
            <td>{{ $genre->name }}</td>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Artist</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($albums as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->artist }}</td>
                <td><button> <a href="{{ route('albums.show', ['album' => $item]) }}">
                        Go to
                    </a> </button></td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
