@extends('layouts.main')

@section('content')
<h1>Edit your Genre here!</h1>

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
        </tr>
    </tbody>
</table>
<br>
<br>
<form action="{{ route('genres.update', ['genre' => $genre]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
