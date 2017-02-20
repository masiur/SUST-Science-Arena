<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Category::create(['name' => 'Biology']);
        Category::create(['name' => 'Astromony']);
        Category::create(['name' => 'Science']);
    }
}
