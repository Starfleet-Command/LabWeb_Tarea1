<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_genre', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->timestamps();
        });

        //Electronic_id =  1    Rock_id = 2     Pop_id= 3
        //DP1 = 1   DP2 = 2     cs = 3      OotB = 4    EOE = 5
        $data = [
            ['genre_id'=> 1, 'album_id'=> 1],
            ['genre_id'=> 1, 'album_id'=> 2],
            ['genre_id'=> 2, 'album_id'=> 3],
            ['genre_id'=> 2, 'album_id'=> 4],
            ['genre_id'=> 2, 'album_id'=> 5],
            ['genre_id'=> 3, 'album_id'=> 4],
            ['genre_id'=> 3, 'album_id'=> 5],

        ];

        DB::table('album_genre')->insert($data); // Query Builder approach
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_genre');
    }
}
