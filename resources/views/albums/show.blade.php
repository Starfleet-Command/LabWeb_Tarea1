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
<br>
<br>
<table>
<thead>
        <tr>
            <th>#</th>
            <th>Genre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($genres as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td> 
                    <form action="{{ route('albums.deGenre', ['album' => $album, 'genre' => ($item->id)]) }}" method="post">
                        @csrf
                        <input type="submit" value="Delete">
                    </form> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<h4>Add a Genre here!</h4>
<form action="{{ route('albums.reGenre', ['album' => $album]) }}" method="POST">
    @csrf
    <div>
        <label for="">Genre Id</label>
        <input type="number" name="id">
        <input type="submit" value="Add">
    </div>
         
</form>
@endsection
