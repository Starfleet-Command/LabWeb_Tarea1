@extends('layouts.main')

@section('content')
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
@endsection
