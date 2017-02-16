<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Use this user for login as admin
        User::create(['username' => 'admin','email' => 'admin@sustsciencearena.net','password' => bcrypt('a')]);
        //Use this user for login as user

        User::create(['username' => 'masiur','email' => 'mrsiddiki@gmail.com','password' => bcrypt('a')]);
        User::create(['username' => 'mithun','email' => 'mithundas227@gmail.com','password' => bcrypt('a')]);
        //creating 10 test users
        // factory(User::class,10)->create();



    }
}
