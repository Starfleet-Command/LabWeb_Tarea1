<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('duration');
            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->references('id')->on('albums');
            $table->timestamps();
        });

         //DP1 = 1   DP2 = 2     cs = 3      OotB = 4    EOE = 5
        $data = [
            ['name'=> 'Give Life Back to Music', 'duration' => '4:35', 'album_id' => 1],
            ['name'=> 'Instant Crush', 'duration' => '5:38', 'album_id' => 1],
            ['name'=> 'Lose Yourself to Dance', 'duration' => '5:24', 'album_id' => 1],
            ['name'=> 'Get Lucky', 'duration' => '6:10', 'album_id' => 1],

            ['name'=> 'One More Time', 'duration' => '5:20', 'album_id' => 2],
            ['name'=> 'Aerodynamic', 'duration' => '3:33', 'album_id' => 2],
            ['name'=> 'Digital Love', 'duration' => '5:01', 'album_id' => 2],
            ['name'=> 'Harder Better Faster Stronger', 'duration' => '3:45', 'album_id' => 2],

            ['name'=> 'Evil Star', 'duration' => '2:10', 'album_id' => 3],
            ['name'=> 'Quarantine', 'duration' => '2:01', 'album_id' => 3],
            ['name'=> 'The River', 'duration' => '9:39', 'album_id' => 3],
            ['name'=> 'Anamnesis', 'duration' => '3:10', 'album_id' => 3],

            ['name'=> 'Jungle', 'duration' => '3:53', 'album_id' => 4],
            ['name'=> 'Starlight', 'duration' => '4:31', 'album_id' => 4],
            ['name'=> 'The Whale', 'duration' => '5:07', 'album_id' => 4],
            ['name'=> 'Mr. Blue Sky', 'duration' => '5:03', 'album_id' => 4],

            ['name'=> 'Leave a Trace', 'duration' => '3:57', 'album_id' => 5],
            ['name'=> 'Bury It', 'duration' => '3:09', 'album_id' => 5],
            ['name'=> 'Bow Down', 'duration' => '4:38', 'album_id' => 5],
            ['name'=> 'Empty Thread', 'duration' => '4:04', 'album_id' => 5],
            
        ];

        DB::table('songs')->insert($data); // Query Builder approach
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
