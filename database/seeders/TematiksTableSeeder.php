<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TematiksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tematiks')->delete();
        
        \DB::table('tematiks')->insert(array (
            0 => 
            array (
                'id' => 7,
                'kecamatan' => 'Baiturrahman',
                'warna' => '#f609ee',
                'created_at' => '2021-12-02 04:32:44',
                'updated_at' => '2022-05-17 09:03:42',
                'geojson' => 'geojson/W65qkcm7JEeVjhxzo5t3Mz9YA357dW8Qx2ujJsJM.json',
            ),
            1 => 
            array (
                'id' => 8,
                'kecamatan' => 'Banda Raya',
                'warna' => '#320ee1',
                'created_at' => '2021-12-02 04:34:39',
                'updated_at' => '2022-05-17 09:04:10',
                'geojson' => 'geojson/D8qW9J3JzyZGWJd7tK84pQbQZR587OhXmDdX43V8.json',
            ),
            2 => 
            array (
                'id' => 9,
                'kecamatan' => 'Jaya Baru',
                'warna' => '#24b0cc',
                'created_at' => '2021-12-02 04:35:36',
                'updated_at' => '2022-05-17 09:04:37',
                'geojson' => 'geojson/BK3Iw19ZZIcdkw7aBw35Z8HELZF4s5fOcrYjFgnD.json',
            ),
            3 => 
            array (
                'id' => 10,
                'kecamatan' => 'Kuta Alam',
                'warna' => '#0bef85',
                'created_at' => '2021-12-02 04:36:20',
                'updated_at' => '2022-05-17 09:05:05',
                'geojson' => 'geojson/Or5ktwc3XDexIMjPFKpryYMFQAP1Eoco6ds3A5Y6.json',
            ),
            4 => 
            array (
                'id' => 11,
                'kecamatan' => 'Kuta Raja',
                'warna' => '#01f43e',
                'created_at' => '2021-12-02 04:37:00',
                'updated_at' => '2022-05-17 09:05:31',
                'geojson' => 'geojson/SdWpYTTQ8WfgvC7HaQukGfaLqOF1XmCLIgld9VlG.json',
            ),
            5 => 
            array (
                'id' => 12,
                'kecamatan' => 'Lueng Bata',
                'warna' => '#96f901',
                'created_at' => '2021-12-02 04:37:44',
                'updated_at' => '2022-05-17 09:06:21',
                'geojson' => 'geojson/WLUiI13L5Y6FwLnVOMrLvQhzewRWHDuGEcoGouA6.json',
            ),
            6 => 
            array (
                'id' => 13,
                'kecamatan' => 'Meuraxa',
                'warna' => '#97c002',
                'created_at' => '2021-12-02 04:38:28',
                'updated_at' => '2022-05-17 09:06:46',
                'geojson' => 'geojson/K6r0FjIJyJYejKC2ximIlqAgKh1Zz845xmsHhdvH.json',
            ),
            7 => 
            array (
                'id' => 14,
                'kecamatan' => 'Syiah Kuala',
                'warna' => '#07d5e4',
                'created_at' => '2021-12-02 04:39:00',
                'updated_at' => '2022-05-17 09:07:09',
                'geojson' => 'geojson/lAcx7PqEA8lNcU7Fnor9cM92r7s6CLm1X3bCs5H5.json',
            ),
            8 => 
            array (
                'id' => 15,
                'kecamatan' => 'Ulee Kareng',
                'warna' => '#ff5d05',
                'created_at' => '2021-12-02 04:39:39',
                'updated_at' => '2022-05-17 09:07:41',
                'geojson' => 'geojson/5MwR74cCZrNMYczjYs2EKbiSpxsvDSYvGIKqCYbi.json',
            ),
        ));
        
        
    }
}