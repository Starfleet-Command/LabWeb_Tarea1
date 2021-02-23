@extends('layouts.main')

@section('content')
<h1>Create your Genre here!</h1>
<form action="{{ route('genres.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
