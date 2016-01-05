<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Use App\SongsTableSeeder;
Use App\Videos;

class DatabaseSeeder extends Seeder {

    public function VideoSeeder()
    {
      DB::table('videos')->delete();

         Videos::create(['video_url'=> 'https://www.youtube.com/watch?v=wgMQxxLAphs',
        'video_description'=>'Just trying to cover this awesome song',
        'video_author'=>'Zizazao',
        'video_name' => 'Hurt Cover',
        'video_artist'=> 'Johnny Cash',
        'video_album'=>'American IV: The Man Comes Around']);
    }


    public function run()
    {
        $this->call('App\SongsTableSeeder');

        $this->command->info('Song_data table seeded!');
        
        $this->VideoSeeder();
        
        $this->command->info('VideoSeeder table seeded!');
    }
}



