@extends('layouts.main')

@section('content')
<h1>Create your Album here!</h1>
<form action="{{ route('albums.store') }}" method="POST">
    @csrf
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
