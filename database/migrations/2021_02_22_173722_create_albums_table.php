<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('artist');
            $table->integer('year');
            $table->timestamps();
        });

        $data = [
            ['title'=> 'Random Access Memories', 'artist'=> 'Daft Punk', 'year' => 2013],
            ['title'=> 'Discovery', 'artist'=> 'Daft Punk', 'year' => 2001],
            ['title'=> 'Chunky Shrapnel', 'artist'=> 'King Gizzard and the Lizard Wizard', 'year' => 2020],
            ['title'=> 'Out of the Blue', 'artist'=> ' Electric Light Orchestra', 'year' => 1977],
            ['title'=> 'Every Open Eye', 'artist'=> 'Chvrches', 'year' => 2015],
        ];

        DB::table('albums')->insert($data); // Query Builder approach
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
