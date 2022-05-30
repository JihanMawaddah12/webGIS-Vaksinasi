<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PendaftaransTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pendaftarans')->delete();
        
        \DB::table('pendaftarans')->insert(array (
            0 => 
            array (
                'id' => 8,
                'halaman_data2_id' => 2,
                'nik' => '112233445778',
                'name' => 'Admin Vaksinasi Banda Aceh',
                'jk' => 'Laki-laki',
                'no_hp' => '098765432345',
                'alamat' => 'keutapang',
                'created_at' => '2022-04-19 13:14:21',
                'updated_at' => '2022-04-19 13:15:15',
                'kelompok' => 'nakes',
                'dosis' => 'Dosis 2',
                'desa_id' => 20,
                'tematik_id' => 9,
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 9,
                'halaman_data2_id' => 2,
                'nik' => '112233445566778',
                'name' => 'Jihan Mawaddah',
                'jk' => 'Perempuan',
                'no_hp' => '098765432345',
                'alamat' => 'Stadion Harapan Bangsa',
                'created_at' => '2022-04-25 13:59:59',
                'updated_at' => '2022-05-10 08:05:09',
                'kelompok' => 'masyarakat umum',
                'dosis' => 'Dosis 2',
                'desa_id' => 20,
                'tematik_id' => 9,
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 10,
                'halaman_data2_id' => 2,
                'nik' => '112233445778',
                'name' => 'Admin',
                'jk' => 'Laki-laki',
                'no_hp' => '098765432345',
                'alamat' => 'Jl. Cut Nyak Dhien No.23, Lamtemen Bar., Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232',
                'created_at' => '2022-04-25 14:01:13',
                'updated_at' => '2022-05-10 08:05:26',
                'kelompok' => 'nakes',
                'dosis' => 'Dosis 1',
                'desa_id' => 17,
                'tematik_id' => 9,
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 11,
                'halaman_data2_id' => 8,
                'nik' => '123333333333',
                'name' => 'nahda',
                'jk' => 'Perempuan',
                'no_hp' => '0987654332445',
                'alamat' => 'keutapang',
                'created_at' => '2022-05-10 08:07:00',
                'updated_at' => '2022-05-10 08:07:00',
                'kelompok' => 'nakes',
                'dosis' => 'Dosis 2',
                'desa_id' => 26,
                'tematik_id' => 15,
                'status' => 0,
            ),
            4 => 
            array (
                'id' => 12,
                'halaman_data2_id' => 2,
                'nik' => '123333333333',
                'name' => 'nahda',
                'jk' => 'Perempuan',
                'no_hp' => '098765432345',
                'alamat' => 'Jl. Cut Nyak Dhien No.23, Lamtemen Bar., Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232',
                'created_at' => '2022-05-10 08:07:39',
                'updated_at' => '2022-05-10 08:07:39',
                'kelompok' => 'usia 6-11 tahun',
                'dosis' => 'Dosis 3',
                'desa_id' => 79,
                'tematik_id' => 14,
                'status' => 0,
            ),
            5 => 
            array (
                'id' => 13,
                'halaman_data2_id' => 12,
                'nik' => 'w',
                'name' => 'w',
                'jk' => 'Laki-laki',
                'no_hp' => 'w',
                'alamat' => 'w',
                'created_at' => '2022-05-25 01:58:19',
                'updated_at' => '2022-05-25 01:58:19',
                'kelompok' => 'nakes',
                'dosis' => 'Dosis 1',
                'desa_id' => 20,
                'tematik_id' => 7,
                'status' => 0,
            ),
            6 => 
            array (
                'id' => 14,
                'halaman_data2_id' => 12,
                'nik' => '1234',
                'name' => 'Javascript',
                'jk' => 'Laki-laki',
                'no_hp' => 'wds',
                'alamat' => 'w',
                'created_at' => '2022-05-25 02:01:16',
                'updated_at' => '2022-05-25 02:01:16',
                'kelompok' => 'nakes',
                'dosis' => 'Dosis 1',
                'desa_id' => 25,
                'tematik_id' => 7,
                'status' => 0,
            ),
            7 => 
            array (
                'id' => 15,
                'halaman_data2_id' => 10,
                'nik' => 'qwe',
                'name' => 'qwe',
                'jk' => 'Laki-laki',
                'no_hp' => 'qwe',
                'alamat' => 'qwe',
                'created_at' => '2022-05-25 02:03:40',
                'updated_at' => '2022-05-25 02:03:40',
                'kelompok' => 'nakes',
                'dosis' => 'Dosis 1',
                'desa_id' => 24,
                'tematik_id' => 8,
                'status' => 0,
            ),
            8 => 
            array (
                'id' => 16,
                'halaman_data2_id' => 25,
                'nik' => '2',
                'name' => '2',
                'jk' => 'Laki-laki',
                'no_hp' => 'q',
                'alamat' => 'w',
                'created_at' => '2022-05-25 03:10:23',
                'updated_at' => '2022-05-25 03:10:23',
                'kelompok' => 'nakes',
                'dosis' => 'Dosis 1',
                'desa_id' => 24,
                'tematik_id' => 7,
                'status' => 0,
            ),
            9 => 
            array (
                'id' => 17,
                'halaman_data2_id' => 25,
                'nik' => '2qwe',
                'name' => '2qwe',
                'jk' => 'Laki-laki',
                'no_hp' => 'qqwe',
                'alamat' => 'wqwe',
                'created_at' => '2022-05-25 03:10:50',
                'updated_at' => '2022-05-25 03:10:50',
                'kelompok' => 'nakes',
                'dosis' => 'Dosis 1',
                'desa_id' => 24,
                'tematik_id' => 7,
                'status' => 0,
            ),
        ));
        
        
    }
}