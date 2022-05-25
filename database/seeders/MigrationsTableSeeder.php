<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 6,
                'migration' => '2021_11_22_064957_edit_halamandata_table',
                'batch' => 3,
            ),
            5 => 
            array (
                'id' => 7,
                'migration' => '2021_11_22_091952_edit_halamandata2_table',
                'batch' => 4,
            ),
            6 => 
            array (
                'id' => 8,
                'migration' => '2021_11_23_043218_create_tematiks_table',
                'batch' => 5,
            ),
            7 => 
            array (
                'id' => 9,
                'migration' => '2021_11_28_084711_add_geojson_to_tematik_table',
                'batch' => 6,
            ),
            8 => 
            array (
                'id' => 12,
                'migration' => '2021_11_07_065505_create_halaman_data_table',
                'batch' => 7,
            ),
            9 => 
            array (
                'id' => 15,
                'migration' => '2022_01_30_081734_create_halaman_data2s_table',
                'batch' => 8,
            ),
            10 => 
            array (
                'id' => 16,
                'migration' => '2022_02_13_084252_add_tanggal_to_halamandata',
                'batch' => 9,
            ),
            11 => 
            array (
                'id' => 17,
                'migration' => '2022_04_03_044853_create_pendaftarans_table',
                'batch' => 10,
            ),
            12 => 
            array (
                'id' => 18,
                'migration' => '2022_04_03_045651_add_level_to_user',
                'batch' => 10,
            ),
            13 => 
            array (
                'id' => 19,
                'migration' => '2022_04_03_050709_create_rumah_sakits_table',
                'batch' => 10,
            ),
            14 => 
            array (
                'id' => 20,
                'migration' => '2022_04_07_031225_create_desas_table',
                'batch' => 11,
            ),
            15 => 
            array (
                'id' => 21,
                'migration' => '2022_04_14_052135_add_kapasitas_to_halaman_data2_table',
                'batch' => 12,
            ),
            16 => 
            array (
                'id' => 22,
                'migration' => '2022_04_14_053400_add_data_to_pendaftaran',
                'batch' => 13,
            ),
            17 => 
            array (
                'id' => 25,
                'migration' => '2022_04_14_064439_delete_column_to_halaman_data',
                'batch' => 14,
            ),
            18 => 
            array (
                'id' => 26,
                'migration' => '2022_04_14_065914_change_column_to_halaman_data',
                'batch' => 14,
            ),
            19 => 
            array (
                'id' => 27,
                'migration' => '2022_04_14_074425_add_verifikasi_to_pendaftaran',
                'batch' => 15,
            ),
            20 => 
            array (
                'id' => 29,
                'migration' => '2022_05_25_030901_create_daftars_table',
                'batch' => 16,
            ),
        ));
        
        
    }
}