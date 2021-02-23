@extends('layouts.main')

@section('content')
<h1>List of genres</h1>
<p>
    <a href="{{ route('genres.create') }}">Create a Genre</a>
</p>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($genres as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                   <button> <a href="{{ route('genres.show', ['genre' => $item]) }}">
                        Show
                    </a> </button>|
                    <button> <a href="{{ route('genres.edit', ['genre' => $item]) }}">
                        Update
                    </a> </button>
                    <form action="{{ route('genres.destroy', ['genre' => $item]) }}" method="post">
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