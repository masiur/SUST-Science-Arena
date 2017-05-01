<?php

use Illuminate\Database\Seeder;
use App\Models\Info;
// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;

class InfoTableSeeder extends Seeder
{
    public function run()
    {
        Info::create(['contact' => '+880962873993',
                     'fb_link' => 'https://www.facebook.com/SUSTScienceArena/',
                     'twitter_link' => 'https://twitter.com/ssa_sust',
                     'youtube_link' => 'https://www.youtube.com/channel/UCf1nbX43V-xlLP-2-qmu31A',
                     'googleplus_link' => 'https://plus.google.com/+SUSTScienceArena',
                     'email' => 'ssa.sust@gmail.com'
                    ]);
    }
}
// https://www.youtube.com/channel/UCf1nbX43V-xlLP-2-qmu31A