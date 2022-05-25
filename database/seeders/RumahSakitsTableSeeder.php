<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RumahSakitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rumah_sakits')->delete();
        
        \DB::table('rumah_sakits')->insert(array (
            0 => 
            array (
                'id' => 3,
                'halaman_data2_id' => 9,
                'user_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2022-04-05 03:16:47',
                'updated_at' => '2022-04-05 03:16:47',
            ),
            1 => 
            array (
                'id' => 4,
                'halaman_data2_id' => 15,
                'user_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-04-07 03:54:12',
                'updated_at' => '2022-04-07 03:54:12',
            ),
            2 => 
            array (
                'id' => 5,
                'halaman_data2_id' => 2,
                'user_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2022-04-14 07:38:30',
                'updated_at' => '2022-04-14 07:38:30',
            ),
        ));
        
        
    }
}