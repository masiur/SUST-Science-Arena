<?php

use Illuminate\Database\Seeder;
use App\Models\CommitteeMember;


class CommitteeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        CommitteeMember::create(['name' => 'Masiur Rahman Siddiki',
        	                     'designation' => 'President',
        	                     'contact' => '01876767987',
        	                     'info' => 'Passionate about Science',
        	                     'rank' => 1
        	                     ]);

        CommitteeMember::create(['name' => 'Mithun Das',
        	                     'designation' => 'Genaral Secretary',
        	                     'contact' => '01833994177',
        	                     'info' => 'Passionate about Science',
        	                     'rank' => 1
        	                     ]);

        CommitteeMember::create(['name' => 'Abu Talha',
        	                     'designation' => 'Secretary',
        	                     'contact' => '01833994567',
        	                     'info' => 'Passionate about Science',
        	                     'rank' => 2
        	                     ]);

        CommitteeMember::create(['name' => 'Shourav Bhowmik',
        	                     'designation' => 'Executive Member',
        	                     'contact' => '01833994567',
        	                     'info' => 'Passionate about Science',
        	                     'rank' => 2
        	                     ]);



    }
}
