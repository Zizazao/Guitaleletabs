<?php
namespace App;
use Illuminate\Database\Seeder;


class VideosTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('videos')->delete();

        Videos::create(['video_url'=> 'https://www.youtube.com/watch?v=wgMQxxLAphs',
        'video_description'=>'Just trying to cover this awesome song',
        'video_author'=>'Zizazao',
        'video_name' => 'Hurt Cover',
        'video_artist'=> 'Johnny Cash',
        'video_album'=>'American IV: The Man Comes Around']);
    }

}