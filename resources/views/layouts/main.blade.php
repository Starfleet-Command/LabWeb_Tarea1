<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi sitio web</title>
</head>
<body>
    <button><a href="{{ route('genres.index') }}"> Genres</a></button>
    <button><a href="{{ route('albums.index') }}"> Albums</a> </button>
    <button><a href="{{ route('songs.index') }}"> Songs</a> </button>
    @yield('content')
</body>
</html>
