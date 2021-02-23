<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlbumsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('/layouts/main');
    return redirect('/genres');
});

Route::resource('albums', 'AlbumsController');
Route::resource('genres', 'GenresController');
Route::resource('songs', 'SongsController');
Route::post('/albums/deGenre/{album}/{genre}', [AlbumsController::class, 'deGenre'])->name('albums.deGenre');
Route::post('/albums/reGenre/{album}', [AlbumsController::class, 'reGenre'])->name('albums.reGenre');

