<?php
namespace App;

use Illuminate\Database\Seeder;


class SongsTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('song_datas')->delete();

        Song_data::create(['song' => 'Example',
        'album' =>'Example',
        'artist' => 'Example',        
        'difficulty'=>'Novice',
        'view' => 'Specify the tuning, example:
Tuning: Standard(ADGCEA)
Instructions: copy and paste the segment below as much as you need to write a fingerpicking part.
Example:         
e|--------------------------------------------------------------------------|
B|-----------5-------------7-------------5----8----7----5/7--7---------|
G|--------5-------------7-------------5-------9----7----5/7--7---------|
D|-----5-------------7-------------5--------------------------------------|
A|----------------5--------------------------------------------------------|
E|--5---------------------------5------------------------------------------|

"Insert some lyrics here."

If you want to write some part with chords, just put it over the lyrics, like this:
-G-     -B-     -Em-             -F-       -F#-
bla bla.... blablablaa... bla...........yeah

Put the chords between "-" and "-" without cuotes for a correct display.

So you are ready now! Try it!']);
    }

}