<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genre;
use App\Models\Album;
use App\Models\Song;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', ['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = $request->input();
        $album = new Album();
        $album->title = $arr['title'];
        $album->artist = $arr['artist'];
        $album->year = $arr['year'];
        $album->save();
        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        $songs = $album->songs()->paginate(20);
        $genres = $album->genres()->paginate(20);
        $allgenres = Genre::all();
        //dd($albums);
        return view('albums.show', ['album' => $album, 'songs' => $songs, 'genres' => $genres, 'allgenres' => $allgenres]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('albums.edit', ['album' => $album]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $arr = $request->input();
        $album->title = $arr['title'];
        $album->artist = $arr['artist'];
        $album->year = $arr['year'];
        $album->save();
        return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index');
    }

    public function deGenre(Album $album, $id_genre )
    {
        $album->genres()->detach($id_genre);
        //dd($album);
        return back();
    }

    public function reGenre(Album $album, Request $request )
    {
        $arr = $request->input();
        $id = $arr['id'];
        $album->genres()->attach($id);
        //dd($arr);
        return back();
    }
}
