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
@endsection
