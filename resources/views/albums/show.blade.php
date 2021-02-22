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
@endsection
