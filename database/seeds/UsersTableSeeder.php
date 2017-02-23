<?php

use App\Models\User;
use App\Models\Profile;
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
        User::create(['username' => 'admin','email' => 'admin@sustsciencearena.net','password' => bcrypt('a')]);
        Profile::create(['fullName' => 'Administrator', 'user_id' => 1]);

        User::create(['username' => 'masiur','email' => 'mrsiddiki@gmail.com','password' => bcrypt('a')]);
        Profile::create(['fullName' => 'Masiur Rahman Siddiki', 'user_id' => 2]);

        User::create(['username' => 'mithun','email' => 'mithun.das227@gmail.com','password' => bcrypt('a')]);
        Profile::create(['fullName' => 'Mithun Das', 'user_id' => 3]);

    }
}
