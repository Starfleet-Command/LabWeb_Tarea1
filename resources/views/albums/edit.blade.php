@extends('layouts.main')

@section('content')
<h1>Edit your Album here!</h1>

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
<br>
<br>
<form action="{{ route('albums.update', ['album' => $album]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="">Artist</label>
        <input type="text" name="artist">
    </div>
    <div>
        <label for="">Year</label>
        <input type="number" name="year">
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
