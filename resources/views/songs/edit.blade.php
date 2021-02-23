@extends('layouts.main')

@section('content')
<h1>Edit your Song here!</h1>

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
        <tr>
            <td>{{ $song->id }}</td>
            <td>{{ $song->name }}</td>
            <td>{{ $song->duration }}</td>
            <td>{{ $song->album_id }}</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<form action="{{ route('songs.update', ['song' => $song]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Duration</label>
        <input type="text" name="duration">
    </div>
    <div>
        <label for="">Album Id</label>
        <input type="number" name="album_id">
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
