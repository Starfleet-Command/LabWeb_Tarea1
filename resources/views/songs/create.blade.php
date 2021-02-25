@extends('layouts.main')

@section('content')
<h1>Create your Song here!</h1>
<form action="{{ route('songs.store') }}" method="POST">
    @csrf
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
        <select name="album_id" id="album_id">
        @foreach ($allalbums as $item)
        <option value="{{$item->id}}">{{ $item->title }} - {{$item->artist}}</options>
        @endforeach
        </select>
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
