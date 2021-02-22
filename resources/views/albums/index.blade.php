@extends('layouts.main')

@section('content')
<h1>List of Albums</h1>
<p>
    <a href="{{ route('albums.create') }}">Create an Album</a>
</p>
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
        @foreach ($albums as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->artist }}</td>
                <td>{{ $item->year }}</td>
                <td>
                   <button> <a href="{{ route('albums.show', ['album' => $item]) }}">
                        Show
                    </a> </button>|
                    <button> <a href="{{ route('albums.edit', ['album' => $item]) }}">
                        Update
                    </a> </button>
                    <form action="{{ route('albums.destroy', ['album' => $item]) }}" method="post">
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