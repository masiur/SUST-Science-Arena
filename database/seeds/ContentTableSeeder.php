<?php

use Illuminate\Database\Seeder;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ContentTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        // Events
        Event::create(['name' => 'Hettich-SSA Science Fest 2017',
        				'description' => "শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, সিলেট এর অন্যতম বিজ্ঞান সংগঠন ‘সাস্ট সায়েন্স অ্যারেনা’। সাস্ট সায়েন্স অ্যারেনা আগামী ২৪ শে ফেব্রুয়ারি ১৩ বছরে পা দিতে যাচ্ছে। ১৩ তম জন্মবার্ষিকী উপলক্ষ্যে আমাদের রয়েছে কিছু আয়োজন। আগামী ২৪ ফেব্রুয়ারি ২০১৭ তারিখ রোজ শুক্রবার বিশ্ববিদ্যালয় প্রাঙ্গনে আমরা আয়োজন করতে যাচ্ছি 'Hettich-SSA Science Fest 2017'। এই আয়োজনে থাকছে বিজ্ঞান মেলা ও অলিম্পিয়াড। সেই সাথে থাকছে এই ১৩ বছরে যে পরিবারটি গড়ে উঠেছে তার পুনর্মিলনী।",
        				'date' => '24-02-2017',
        				'place' => 'SUST'
        				]);
        // about us content 
        // Content::create(['about_us' => 'Our objective is to promote activities of science, expose recent scientific information to students and to encourage students about science. We are committed to popularize science among young people. To accomplish this job we arrange different types of exposition programs like poster exhibition, science lecture, writing competition, organize seminar, conference, science Fair, quiz competition, debate competition, exhibition on science, study circle, talk show, Sudoku competition, publish Magazine, journal, celebrate science day, science week, establish science library, science talk, participating in social activities.'
        // 	]);

        // Other Contents 
        

    }
}
