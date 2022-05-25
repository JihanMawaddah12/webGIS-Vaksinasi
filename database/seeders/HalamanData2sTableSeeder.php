<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HalamanData2sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('halaman_data2s')->delete();
        
        \DB::table('halaman_data2s')->insert(array (
            0 => 
            array (
                'id' => 2,
                'tematik_id' => 10,
                'lokasi' => 'RSUDZA',
                'alamat' => 'Jl. Teuku Moh. Daud Beureueh No.108, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415',
                'deskripsi' => '- Moderna',
                'long' => '95.33757686855104',
                'lat' => '5.563910244341164',
                'gambar' => 'images/RRlB6E8bywr8SBsDc5IJquVncaEYdQYuUjyuqGdJ.png',
                'created_at' => '2022-01-30 08:53:17',
                'updated_at' => '2022-05-09 04:15:26',
                'kapasitas' => 100,
            ),
            1 => 
            array (
                'id' => 7,
                'tematik_id' => 13,
            'lokasi' => 'Rumah Sakit Ibu dan Anak (RSIA) Aceh',
                'alamat' => 'Jalan Prof. A. Majid Ibrahim I No. 3, Meuraxa, Punge Jurong, Kec. Meuraxa, Kota Banda Aceh, Aceh 23116',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.31198923874244',
                'lat' => '5.550442980831453',
                'gambar' => '',
                'created_at' => '2022-02-13 07:32:17',
                'updated_at' => '2022-02-13 07:32:17',
                'kapasitas' => 0,
            ),
            2 => 
            array (
                'id' => 8,
                'tematik_id' => 10,
                'lokasi' => 'Rumah Sakit Jiwa Aceh',
                'alamat' => 'Jl. Dr. Syarif Thayeb, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh 23126',
                'deskripsi' => 'senin-jumat 08.00-18.00',
                'long' => '95.34045449641519',
                'lat' => '5.561207476140257',
                'gambar' => '',
                'created_at' => '2022-02-13 07:34:16',
                'updated_at' => '2022-02-13 07:34:16',
                'kapasitas' => 0,
            ),
            3 => 
            array (
                'id' => 9,
                'tematik_id' => 13,
                'lokasi' => 'RSUD Meuraxa',
                'alamat' => 'Jl. Soekarno - Hatta No.1, Mibo, Kec. Banda Raya, Kota Banda Aceh, Aceh 23231',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.31780826757873',
                'lat' => '5.518268324506087',
                'gambar' => '',
                'created_at' => '2022-02-13 07:36:15',
                'updated_at' => '2022-02-13 07:36:15',
                'kapasitas' => 0,
            ),
            4 => 
            array (
                'id' => 10,
                'tematik_id' => 10,
                'lokasi' => 'Rumah Sakit Kesdam Iskandar Muda',
                'alamat' => 'Jl. T. Angkasa Bendahara, Kuta Alam, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.32453163874237',
                'lat' => '5.554979700400141',
                'gambar' => '',
                'created_at' => '2022-02-13 07:37:28',
                'updated_at' => '2022-02-13 07:37:28',
                'kapasitas' => 0,
            ),
            5 => 
            array (
                'id' => 11,
                'tematik_id' => 9,
                'lokasi' => 'POLIKLINIK BIDDOKES POLDA ACEH',
                'alamat' => 'Jl. Cut Nyak Dhien No.23, Lamtemen Bar., Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232',
                'deskripsi' => 'senin-jumat 08.00-16.00',
                'long' => '95.29501519641515',
                'lat' => '5.5307128738308',
                'gambar' => '',
                'created_at' => '2022-02-13 07:39:00',
                'updated_at' => '2022-02-13 07:39:00',
                'kapasitas' => 0,
            ),
            6 => 
            array (
                'id' => 12,
                'tematik_id' => 14,
                'lokasi' => 'Puskesmas Kopelma Darussalam',
                'alamat' => 'Jl. Inong Bale No.38, Rukoh, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24415',
                'deskripsi' => 'Senin-kamis 09.00–14.00, Jumat,09.00–12.00, Sabtu,09.00–13.00',
                'long' => '95.36433709826991',
                'lat' => '5.578395578482846',
                'gambar' => '',
                'created_at' => '2022-02-13 07:41:34',
                'updated_at' => '2022-02-13 07:41:34',
                'kapasitas' => 0,
            ),
            7 => 
            array (
                'id' => 13,
                'tematik_id' => 8,
                'lokasi' => 'Puskesmas Banda Raya',
                'alamat' => 'Jl. Tengku Dilhong I, Lhong Raya, Kec. Banda Raya, Kota Banda Aceh, Aceh 23117',
                'deskripsi' => 'Senin - sabtu 08.15–12.00',
                'long' => '95.32060955408798',
                'lat' => '5.530802142669318',
                'gambar' => '',
                'created_at' => '2022-02-13 07:53:41',
                'updated_at' => '2022-02-13 07:53:41',
                'kapasitas' => 0,
            ),
            8 => 
            array (
                'id' => 14,
                'tematik_id' => 9,
                'lokasi' => 'PUSKESMAS JAYA BARU',
                'alamat' => 'G7MQ+XX5, Lampoh Daya, Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232',
                'deskripsi' => 'Senin-sabtu, 08.00–15.00',
                'long' => '95.29000672525156',
                'lat' => '5.535119729864693',
                'gambar' => '',
                'created_at' => '2022-02-13 07:54:53',
                'updated_at' => '2022-02-13 07:54:53',
                'kapasitas' => 0,
            ),
            9 => 
            array (
                'id' => 15,
                'tematik_id' => 13,
                'lokasi' => 'Puskesmas Meuraxa',
                'alamat' => 'H73W+86F, Blang Oi, Kec. Meuraxa, Kota Banda Aceh, Aceh',
                'deskripsi' => 'Senin-jumat, 08.00–15.00',
                'long' => '95.29552283874247',
                'lat' => '5.553579757946271',
                'gambar' => '',
                'created_at' => '2022-02-13 07:55:46',
                'updated_at' => '2022-02-13 07:55:46',
                'kapasitas' => 0,
            ),
            10 => 
            array (
                'id' => 16,
                'tematik_id' => 15,
                'lokasi' => 'Puskesmas Ulee Kareng',
                'alamat' => 'Jl. Puskesmas Pango Raya Kec. Ulee Kareng Kota Banda Aceh Aceh 23116',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.34957229641515',
                'lat' => '5.537332871435186',
                'gambar' => '',
                'created_at' => '2022-02-13 07:57:13',
                'updated_at' => '2022-02-13 07:57:13',
                'kapasitas' => 0,
            ),
            11 => 
            array (
                'id' => 17,
                'tematik_id' => 7,
                'lokasi' => 'Puskesmas Baiturrahman',
                'alamat' => 'G8XG+H7F, Ateuk Pahlawan, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23127',
                'deskripsi' => 'Senin-sabtu, 08.00–12.00',
                'long' => '95.32566509641522',
                'lat' => '5.549153545710776',
                'gambar' => '',
                'created_at' => '2022-02-13 07:58:11',
                'updated_at' => '2022-02-13 07:58:11',
                'kapasitas' => 0,
            ),
            12 => 
            array (
                'id' => 18,
                'tematik_id' => 12,
                'lokasi' => 'UPTD PUSKESMAS BATOH',
                'alamat' => 'Jl. Unmuha, Batoh, Kec. Lueng Bata, Kota Banda Aceh, Aceh 23245',
                'deskripsi' => 'Senin-kamis 08.00–14.00, Jumat,08.00–11.30, Sabtu,08.00–13.00',
                'long' => '95.33307881176067',
                'lat' => '5.536122256691597',
                'gambar' => '',
                'created_at' => '2022-02-13 07:59:33',
                'updated_at' => '2022-02-13 07:59:33',
                'kapasitas' => 0,
            ),
            13 => 
            array (
                'id' => 19,
                'tematik_id' => 14,
                'lokasi' => 'Puskesmas Jeulingke',
                'alamat' => 'Jl. Bate Timoh, Jeulingke, Kec. Syiah Kuala, Kota Banda Aceh, Aceh',
                'deskripsi' => 'Senin-kamis 08.00–14.00, Jumat 08.00–11.30, Sabtu 08.00–12.00',
                'long' => '95.34378238292439',
                'lat' => '5.576707591308667',
                'gambar' => '',
                'created_at' => '2022-02-13 08:01:04',
                'updated_at' => '2022-02-13 08:01:04',
                'kapasitas' => 0,
            ),
            14 => 
            array (
                'id' => 20,
                'tematik_id' => 10,
                'lokasi' => 'PUSKESMAS LAMPULO',
                'alamat' => 'H8GG+833, Lampulo, Kec. Kuta Alam, Kota Banda Aceh, Aceh',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.32521218292437',
                'lat' => '5.57597245739572',
                'gambar' => '',
                'created_at' => '2022-02-13 08:02:14',
                'updated_at' => '2022-02-13 08:02:14',
                'kapasitas' => 0,
            ),
            15 => 
            array (
                'id' => 21,
                'tematik_id' => 11,
                'lokasi' => 'UPTD. Puskesmas Lampaseh',
                'alamat' => 'H846+XCX, Lampaseh Kota, Kec. Kuta Raja, Kota Banda Aceh, Aceh',
                'deskripsi' => 'Senin-kamis 08.00–14.00, Jumat 08.00–11.30, Sabtu 08.00–12.00',
                'long' => '95.31121845590998',
                'lat' => '5.55773229924059',
                'gambar' => '',
                'created_at' => '2022-02-13 08:03:25',
                'updated_at' => '2022-02-13 08:03:25',
                'kapasitas' => 0,
            ),
            16 => 
            array (
                'id' => 22,
                'tematik_id' => 10,
                'lokasi' => 'Puskesmas Kuta Alam',
                'alamat' => 'Jl. Dharma, Mulia, Kec. Kuta Alam, Kota Banda Aceh, Aceh 23123',
                'deskripsi' => 'Senin-sabtu 07.50–12.00',
                'long' => '95.3236101252516',
                'lat' => '5.5633794619819925',
                'gambar' => '',
                'created_at' => '2022-02-13 08:04:23',
                'updated_at' => '2022-02-13 08:04:23',
                'kapasitas' => 0,
            ),
            17 => 
            array (
                'id' => 23,
                'tematik_id' => 13,
                'lokasi' => 'Kantor Kesehatan Pelabuhan',
                'alamat' => 'H75P+M62, Ulee Lheue, Kec. Meuraxa, Kota Banda Aceh, Aceh',
                'deskripsi' => 'Senin-jumat, 08.00–15.00',
                'long' => '95.28539207736038',
                'lat' => '5.559369329699564',
                'gambar' => '',
                'created_at' => '2022-02-13 08:05:43',
                'updated_at' => '2022-02-13 08:05:43',
                'kapasitas' => 0,
            ),
            18 => 
            array (
                'id' => 24,
                'tematik_id' => 9,
                'lokasi' => 'RS Bhayangkara Banda Aceh',
                'alamat' => 'Jl. Cut Nyak Dhien No.23, Lamtemen Bar., Kec. Jaya Baru, Kota Banda Aceh, Aceh 23232',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.29497272525154',
                'lat' => '5.5307295738247415',
                'gambar' => '',
                'created_at' => '2022-02-13 08:06:47',
                'updated_at' => '2022-02-13 08:06:47',
                'kapasitas' => 0,
            ),
            19 => 
            array (
                'id' => 25,
                'tematik_id' => 14,
                'lokasi' => 'RS Prince Nayef Unsyiah',
                'alamat' => 'Jl. Lingkar Kampus, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24411',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.36977276572418',
                'lat' => '5.564108961716578',
                'gambar' => '',
                'created_at' => '2022-02-13 08:07:42',
                'updated_at' => '2022-02-13 08:07:42',
                'kapasitas' => 0,
            ),
            20 => 
            array (
                'id' => 26,
                'tematik_id' => 8,
                'lokasi' => 'RS Teungku Fakinah',
                'alamat' => 'Jl. Jenderal Sudirman No.27-29, Geuceu Iniem, Kec. Banda Raya, Kota Banda Aceh, Aceh 23239',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.30400093874239',
                'lat' => '5.529877116316177',
                'gambar' => '',
                'created_at' => '2022-02-13 08:08:26',
                'updated_at' => '2022-02-13 08:08:26',
                'kapasitas' => 0,
            ),
            21 => 
            array (
                'id' => 27,
                'tematik_id' => 7,
                'lokasi' => 'Rumah Sakit Pertamedika',
                'alamat' => 'Jl. Sekolah No. 5 Gampoeng, Ateuk Pahlawan, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23241',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.32658016757883',
                'lat' => '5.549570459764817',
                'gambar' => '',
                'created_at' => '2022-02-13 08:09:30',
                'updated_at' => '2022-02-13 08:09:30',
                'kapasitas' => 0,
            ),
            22 => 
            array (
                'id' => 28,
                'tematik_id' => 7,
                'lokasi' => 'RSU. Harapan Bunda',
                'alamat' => 'Jl. Teuku Umar No.181-211, Seutui, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23243',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.31005505408798',
                'lat' => '5.540090598094974',
                'gambar' => '',
                'created_at' => '2022-02-13 08:10:09',
                'updated_at' => '2022-02-13 08:10:09',
                'kapasitas' => 0,
            ),
            23 => 
            array (
                'id' => 29,
                'tematik_id' => 10,
                'lokasi' => 'RSIA Cempaka Az-Zahra',
                'alamat' => 'H88H+RPV, Mulia, Kec. Kuta Alam, Kota Banda Aceh, Aceh 23123',
                'deskripsi' => 'Buka 24 Jam',
                'long' => '95.32918890805142',
                'lat' => '5.567385251674277',
                'gambar' => '',
                'created_at' => '2022-02-13 08:11:06',
                'updated_at' => '2022-02-13 08:11:06',
                'kapasitas' => 0,
            ),
        ));
        
        
    }
}