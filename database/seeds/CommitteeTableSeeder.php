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
        
        CommitteeMember::create(['name' => 'Rifat Hyder',
                              'designation' => 'President',
                              'contact' => '+8801962873993',
                              'info' => 'PHY 2013, SUST',
                              'rank' => 1,
                              'year' => 2016
                              ]);

        CommitteeMember::create(['name' => 'Masiur Rahman Siddiki',
        	                     'designation' => 'Organizing Secretary',
        	                     'contact' => '01711107915',
        	                     'info' => 'CSE 2012, SUST',
                                 'year' => 2014,
        	                     'rank' => 10
        	                     ]);
        CommitteeMember::create(['name' => 'Tousif Sadman',
        	                     'designation' => 'President',
        	                     'contact' => '0123444555',
        	                     'info' => 'CSE 2012, SUST',
                                 'year' => 2015,
        	                     'rank' => 1
        	                     ]);  
        CommitteeMember::create(['name' => 'Masiur Rahman Siddiki',
        	                     'designation' => 'Vice President',
        	                     'contact' => '01711107915',
        	                     'info' => 'CSE 2012, SUST',
                                 'year' => 2015,
        	                     'rank' => 10
        	                     ]);                        

        CommitteeMember::create(['name' => 'Md. Abu Kowser',
        	                     'designation' => 'President',
        	                     'contact' => '01639193436',
        	                     'info' => 'STA 2017-18',
                                 'year' => 2021,
        	                     'rank' => 1,
                                 'nth_of_committee' => 17
        	                     ]);

        CommitteeMember::create(['name' => 'Mohammad Shakib Al Rafi',
        	                     'designation' => 'General Secretary',
        	                     'contact' => '01739022219',
        	                     'info' => 'PHY 2017-18',
        	                     'rank' => 2,
                                 'year' => 2021,
                                 'nth_of_committee' => 17
        	                     ]);

        // CommitteeMember::create(['name' => 'Shourav Bhowmik',
        // 	                     'designation' => 'Executive Member',
        // 	                     'contact' => '01833994567',
        // 	                     'info' => 'Passionate about Science',
        // 	                     'rank' => 2
        // 	                     ]);



    }
}
