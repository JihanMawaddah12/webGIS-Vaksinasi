<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2a$12$p.YLo2Tb7v9ZD85V1I0CNO9V7UmUkBQvs06Zj3NtmukzBWLvvtmC6',
                'remember_token' => NULL,
                'created_at' => '2021-11-07 06:03:20',
                'updated_at' => '2021-11-07 06:03:20',
                'level' => 'admin',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'RSUD Meuraxa',
                'email' => 'meuraxa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hIvT5uHaREdbZXjH0eToRuGavCRCn7.lwp/gX5XfWuI46TThUpyr.',
                'remember_token' => NULL,
                'created_at' => '2022-04-05 03:16:47',
                'updated_at' => '2022-04-05 03:16:47',
                'level' => 'rs',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Puskesmas Meuraxa',
                'email' => 'puskesmasmeuraxa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zXSZHFM8yOHWOexD56pOYeO5vU31JOQOR/VeEg4jCixYvNUi7Ec2u',
                'remember_token' => NULL,
                'created_at' => '2022-04-07 03:54:12',
                'updated_at' => '2022-04-07 03:54:12',
                'level' => 'rs',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'RSUDZA',
                'email' => 'rsudza@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oxoO5jqIu3DWenhpn8EBKOTwD456aTH8VCGr..yG1xynBVZB6rP4.',
                'remember_token' => NULL,
                'created_at' => '2022-04-14 07:38:30',
                'updated_at' => '2022-04-14 07:38:30',
                'level' => 'rs',
            ),
        ));
        
        
    }
}