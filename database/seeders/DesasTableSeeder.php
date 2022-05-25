<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DesasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('desas')->delete();
        
        \DB::table('desas')->insert(array (
            0 => 
            array (
                'id' => 6,
                'desa' => 'Ateuk Deah Tanoh',
                'warna' => '#e00b0b',
                'geojson' => 'geojson/cEQrloUNe9jBOa4tZV0LjNRtcDN1qlurIernzirB.json',
                'created_at' => '2022-04-16 12:30:01',
                'updated_at' => '2022-04-16 12:30:01',
            ),
            1 => 
            array (
                'id' => 7,
                'desa' => 'Ateuk Jawo',
                'warna' => '#fb28ad',
                'geojson' => 'geojson/76FzdFVt3nGZehsDHkBJSATJtZTvKwqIelJJTuHk.json',
                'created_at' => '2022-04-16 12:30:20',
                'updated_at' => '2022-04-16 12:30:20',
            ),
            2 => 
            array (
                'id' => 8,
                'desa' => 'Ateuk Munjeng',
                'warna' => '#8f05ff',
                'geojson' => 'geojson/poFuQrHTCXQvACdTI59EqxUITFM50iUeIAyIFaQp.json',
                'created_at' => '2022-04-16 12:31:12',
                'updated_at' => '2022-04-16 12:31:12',
            ),
            3 => 
            array (
                'id' => 9,
                'desa' => 'Ateuk Pahlawan',
                'warna' => '#112be8',
                'geojson' => 'geojson/gyfePgJrqvl3ziu3oSrY0sq9CYlucrGkzOlDYXgp.json',
                'created_at' => '2022-04-16 12:31:42',
                'updated_at' => '2022-04-16 12:31:42',
            ),
            4 => 
            array (
                'id' => 10,
                'desa' => 'Kampung Baru',
                'warna' => '#4400ff',
                'geojson' => 'geojson/EUkCrJij8J5KmS2FkWpYmnEZ63v6vV3xGGlFbBVl.json',
                'created_at' => '2022-04-16 12:32:09',
                'updated_at' => '2022-04-16 12:32:09',
            ),
            5 => 
            array (
                'id' => 11,
                'desa' => 'Neusu Aceh',
                'warna' => '#0156df',
                'geojson' => 'geojson/UkGxHQD6iduGzwYvv1Wy90eiyjeLkqiYUdqTZpya.json',
                'created_at' => '2022-04-16 12:32:46',
                'updated_at' => '2022-04-16 12:32:46',
            ),
            6 => 
            array (
                'id' => 12,
                'desa' => 'Neusu Jaya',
                'warna' => '#00eeff',
                'geojson' => 'geojson/VSbesBya8U8p7zWQ2rc3Aiuqye7uYpIh2XgnOQZ8.json',
                'created_at' => '2022-04-16 12:33:07',
                'updated_at' => '2022-04-16 12:33:07',
            ),
            7 => 
            array (
                'id' => 13,
                'desa' => 'Peuniti',
                'warna' => '#00ffd5',
                'geojson' => 'geojson/giYYpHt6qa5CUjWMST9LahQxeDMISvLryicsYbNe.json',
                'created_at' => '2022-04-16 12:33:28',
                'updated_at' => '2022-04-16 12:33:28',
            ),
            8 => 
            array (
                'id' => 14,
                'desa' => 'seutui',
                'warna' => '#00ff91',
                'geojson' => 'geojson/JQqg4fMbFjFO62p2kZbWAshc1WI1i77OAU1btdVn.json',
                'created_at' => '2022-04-16 12:33:46',
                'updated_at' => '2022-04-16 12:33:46',
            ),
            9 => 
            array (
                'id' => 15,
                'desa' => 'Sukaramai',
                'warna' => '#00ff4c',
                'geojson' => 'geojson/ODQTzj2xeOPsCGHWLcnDgidvejG1n4GrbDcIkVhV.json',
                'created_at' => '2022-04-16 12:34:15',
                'updated_at' => '2022-04-16 12:34:15',
            ),
            10 => 
            array (
                'id' => 16,
                'desa' => 'Geuceu Iniem',
                'warna' => '#000000',
                'geojson' => 'geojson/GxMg9whDJ9NN9XIGG7FUrrpAPznwaRtIPCLdDiUx.json',
                'created_at' => '2022-04-16 12:39:33',
                'updated_at' => '2022-04-16 12:39:33',
            ),
            11 => 
            array (
                'id' => 17,
                'desa' => 'Bitai',
                'warna' => '#eeff00',
                'geojson' => 'geojson/iK6LJDe0wjWj0ZFgj3cLaRVcSbrFWBBPBLNZ4rMj.json',
                'created_at' => '2022-04-16 12:39:58',
                'updated_at' => '2022-04-16 12:39:58',
            ),
            12 => 
            array (
                'id' => 18,
                'desa' => 'Geuceu Kayee Jato',
                'warna' => '#ffae00',
                'geojson' => 'geojson/4FMHOAZ1366YFATaYWCYRb3gEHLBMcu8f5IjMkkk.json',
                'created_at' => '2022-04-16 12:41:01',
                'updated_at' => '2022-04-16 12:41:01',
            ),
            13 => 
            array (
                'id' => 19,
                'desa' => 'Geuceu Komplek',
                'warna' => '#f08000',
                'geojson' => 'geojson/arSxi9WNBAWCJ2iN5cYziXMCN37fubwqyVzuRxMK.json',
                'created_at' => '2022-04-16 12:41:24',
                'updated_at' => '2022-04-16 12:41:24',
            ),
            14 => 
            array (
                'id' => 20,
                'desa' => 'Emperom',
                'warna' => '#fa4b00',
                'geojson' => 'geojson/vFY9HEpfPElEeRc0yKP3B72AmKzbmkdKOwc16sIR.json',
                'created_at' => '2022-04-16 12:42:37',
                'updated_at' => '2022-04-16 12:42:37',
            ),
            15 => 
            array (
                'id' => 21,
                'desa' => 'Geuceu Meunara',
                'warna' => '#9f3a0f',
                'geojson' => 'geojson/CYnn8vH1W3MofnbUofqGaf3To8kAxkDDo91XJqwU.json',
                'created_at' => '2022-04-16 12:43:13',
                'updated_at' => '2022-04-16 12:43:13',
            ),
            16 => 
            array (
                'id' => 22,
                'desa' => 'Lam Ara',
                'warna' => '#e08181',
                'geojson' => 'geojson/u1id0855YR8r4SOipnGk2eyleUXVZpfu8UI7tsMG.json',
                'created_at' => '2022-04-16 13:34:39',
                'updated_at' => '2022-04-16 13:34:39',
            ),
            17 => 
            array (
                'id' => 23,
                'desa' => 'Lamlagang',
                'warna' => '#a83478',
                'geojson' => 'geojson/Pq5P7472F6Dx9qx3Y2qJdLjmbvUaf4Sk19ii1oBq.json',
                'created_at' => '2022-04-16 13:35:16',
                'updated_at' => '2022-04-16 13:35:16',
            ),
            18 => 
            array (
                'id' => 24,
                'desa' => 'Lampeout',
                'warna' => '#461e66',
                'geojson' => 'geojson/gJoe7WvQ6TqgRe0GoLqbj9KuEQogyvL7yX9niyZV.json',
                'created_at' => '2022-04-16 13:36:52',
                'updated_at' => '2022-04-16 13:36:52',
            ),
            19 => 
            array (
                'id' => 25,
                'desa' => 'Lhong Cut',
                'warna' => '#16606a',
                'geojson' => 'geojson/J9cwpgiHcpTQxVNkt5CgWL6bHBXvPW7MfjlMUXru.json',
                'created_at' => '2022-04-16 13:37:29',
                'updated_at' => '2022-04-16 13:37:29',
            ),
            20 => 
            array (
                'id' => 26,
                'desa' => 'Lhong Raya',
                'warna' => '#45185d',
                'geojson' => 'geojson/eObqu6wtTPaAcorrspe09QkDv2JHgKvSgGfH9uOF.json',
                'created_at' => '2022-04-16 13:37:53',
                'updated_at' => '2022-04-16 13:37:53',
            ),
            21 => 
            array (
                'id' => 27,
                'desa' => 'Mibo',
                'warna' => '#163274',
                'geojson' => 'geojson/ndGAzPPh2iGx4UCwRYBrVeLhne3jOSsxTJboHsb2.json',
                'created_at' => '2022-04-16 13:38:12',
                'updated_at' => '2022-04-16 13:38:12',
            ),
            22 => 
            array (
                'id' => 28,
                'desa' => 'Peunyerat',
                'warna' => '#0e5462',
                'geojson' => 'geojson/GkDp9uNNBeaIKhstz5OASTtiMJgD5qOUcDWN3Te5.json',
                'created_at' => '2022-04-16 13:38:33',
                'updated_at' => '2022-04-16 13:38:33',
            ),
            23 => 
            array (
                'id' => 29,
                'desa' => 'Lamjamee',
                'warna' => '#af7979',
                'geojson' => 'geojson/zpcNI1j9RSJXmBNRN35ZUSLiakqLbnDOCobLk2od.json',
                'created_at' => '2022-04-16 13:39:03',
                'updated_at' => '2022-04-16 13:39:03',
            ),
            24 => 
            array (
                'id' => 30,
                'desa' => 'Lampoh Daya',
                'warna' => '#914660',
                'geojson' => 'geojson/aRjwqFRbNJJfAnGIzM8GNj2G1CZqK2Ac3JyxHOhI.json',
                'created_at' => '2022-04-16 13:39:28',
                'updated_at' => '2022-04-16 13:39:28',
            ),
            25 => 
            array (
                'id' => 31,
                'desa' => 'Lamteumen Barat',
                'warna' => '#3c1b64',
                'geojson' => 'geojson/hoOlTlobKwMiacxs44gMN0brN1oZNTQea6dgRREm.json',
                'created_at' => '2022-04-16 13:39:52',
                'updated_at' => '2022-04-16 13:39:52',
            ),
            26 => 
            array (
                'id' => 32,
                'desa' => 'Lamteumen Timur',
                'warna' => '#5b3434',
                'geojson' => 'geojson/qRk5vpN9udZe10upsIXiz1KuzlKSZ0p6w3QIBmqp.json',
                'created_at' => '2022-04-16 13:42:29',
                'updated_at' => '2022-04-16 13:42:29',
            ),
            27 => 
            array (
                'id' => 33,
                'desa' => 'Punge Blang Cut',
                'warna' => '#5e2153',
                'geojson' => 'geojson/Qaoo3KtJCT1zzmeLhdnrZfuuME41HFOIWkZLH0vH.json',
                'created_at' => '2022-04-16 13:44:26',
                'updated_at' => '2022-04-16 13:44:26',
            ),
            28 => 
            array (
                'id' => 34,
                'desa' => 'Ulee Pata',
                'warna' => '#a15978',
                'geojson' => 'geojson/pNJlIiLq5eo8cGsWjpyiTtFc08ICxJrHy3nkm8Ph.json',
                'created_at' => '2022-04-16 13:44:58',
                'updated_at' => '2022-04-16 13:44:58',
            ),
            29 => 
            array (
                'id' => 35,
                'desa' => 'Gampong Jawa',
                'warna' => '#3e2c68',
                'geojson' => 'geojson/e3F9RNB4pMMZw8VcfXZwVqpzQtAGQVfkh2PGoJ8c.json',
                'created_at' => '2022-04-16 13:45:21',
                'updated_at' => '2022-04-16 13:45:21',
            ),
            30 => 
            array (
                'id' => 36,
                'desa' => 'Gampong Pande',
                'warna' => '#2b4369',
                'geojson' => 'geojson/RDbws6T2Rcje4yaSKXR8AljugzjN13Yy9bbsQZYz.json',
                'created_at' => '2022-04-16 13:45:42',
                'updated_at' => '2022-04-16 13:45:42',
            ),
            31 => 
            array (
                'id' => 37,
                'desa' => 'Keudah',
                'warna' => '#58487f',
                'geojson' => 'geojson/cFuc2aElrALl6q6nicg6x3VkMjETQJ7emq7ffgVE.json',
                'created_at' => '2022-04-16 13:46:00',
                'updated_at' => '2022-04-16 13:46:00',
            ),
            32 => 
            array (
                'id' => 38,
                'desa' => 'Lampaseh Kota',
                'warna' => '#4c0d63',
                'geojson' => 'geojson/JKGIroXxtZ7H18MpNQVrw9KFw5laJcNQNdbLLIR4.json',
                'created_at' => '2022-04-16 13:46:22',
                'updated_at' => '2022-04-16 13:46:22',
            ),
            33 => 
            array (
                'id' => 39,
                'desa' => 'Merduati',
                'warna' => '#2d3e71',
                'geojson' => 'geojson/NEx7iDkUAatmbhzpXmev7OmIvu1DOHbvKL96OPY7.json',
                'created_at' => '2022-04-16 13:46:39',
                'updated_at' => '2022-04-16 13:46:39',
            ),
            34 => 
            array (
                'id' => 40,
                'desa' => 'Peulanggahan',
                'warna' => '#1a6b52',
                'geojson' => 'geojson/pazDFhNvvLjuaTrQM7ISZDHZakSqMt9AJEclt71W.json',
                'created_at' => '2022-04-16 13:46:55',
                'updated_at' => '2022-04-16 13:46:55',
            ),
            35 => 
            array (
                'id' => 41,
                'desa' => 'Bandar Baru',
                'warna' => '#095f95',
                'geojson' => 'geojson/tVPJSKtjFKF55221cMVnQ0JJOhTIzqsYpelbO4U4.json',
                'created_at' => '2022-04-16 13:47:29',
                'updated_at' => '2022-04-16 13:47:29',
            ),
            36 => 
            array (
                'id' => 42,
                'desa' => 'Beurawe',
                'warna' => '#1b8867',
                'geojson' => 'geojson/CDUrE3iKzl3oIg9rHE4ygHp2aB1pl7a41S6RH4aO.json',
                'created_at' => '2022-04-16 13:47:48',
                'updated_at' => '2022-05-17 11:52:22',
            ),
            37 => 
            array (
                'id' => 43,
                'desa' => 'Keuramat',
                'warna' => '#0ca175',
                'geojson' => 'geojson/ztealMEp2NsAuP6vl6VNTu8Ab0Cx2l5p6YgmAnkU.json',
                'created_at' => '2022-04-16 13:48:07',
                'updated_at' => '2022-04-16 13:48:07',
            ),
            38 => 
            array (
                'id' => 44,
                'desa' => 'Kota Baru',
                'warna' => '#10b785',
                'geojson' => 'geojson/0AbnB6dzvBN22C8dFaDgNYYAJn9dbSG5SjoPB6v5.json',
                'created_at' => '2022-04-16 13:48:24',
                'updated_at' => '2022-04-16 13:48:24',
            ),
            39 => 
            array (
                'id' => 45,
                'desa' => 'Kuta Alam',
                'warna' => '#098143',
                'geojson' => 'geojson/lZSm6hdblAigNVLKhZDtqk6jRFjEPzge4CiDyn5f.json',
                'created_at' => '2022-04-16 13:48:43',
                'updated_at' => '2022-04-16 13:48:43',
            ),
            40 => 
            array (
                'id' => 46,
                'desa' => 'Laksana',
                'warna' => '#19a93d',
                'geojson' => 'geojson/gz81dh5Symh99yQe3DVVVpwUxUkMcPSZhtfopb91.json',
                'created_at' => '2022-04-16 13:49:00',
                'updated_at' => '2022-04-16 13:49:00',
            ),
            41 => 
            array (
                'id' => 47,
                'desa' => 'Lambaro Skep',
                'warna' => '#03a006',
                'geojson' => 'geojson/abmH7IZMzNMnTl2uA54nPrnBUC7GjOnxWnE8P30q.json',
                'created_at' => '2022-04-16 13:49:19',
                'updated_at' => '2022-04-16 13:49:19',
            ),
            42 => 
            array (
                'id' => 48,
                'desa' => 'Lamdingin',
                'warna' => '#6ec516',
                'geojson' => 'geojson/swUtwYXv754VZcqbA9M9GGvdOa25eBvwRAk9exyF.json',
                'created_at' => '2022-04-16 13:49:40',
                'updated_at' => '2022-04-16 13:49:40',
            ),
            43 => 
            array (
                'id' => 49,
                'desa' => 'Lampulo',
                'warna' => '#8d9707',
                'geojson' => 'geojson/imCiNURPFUX7aax51vsZ1wgI1T33zMIFmEFTTUtc.json',
                'created_at' => '2022-04-16 13:49:57',
                'updated_at' => '2022-04-16 13:49:57',
            ),
            44 => 
            array (
                'id' => 50,
                'desa' => 'Mulia',
                'warna' => '#c2b200',
                'geojson' => 'geojson/LAYL8Z0IRQZXeLCMyBcKKv93xxU2rVtGCe0HEriP.json',
                'created_at' => '2022-04-16 13:50:24',
                'updated_at' => '2022-04-16 13:50:24',
            ),
            45 => 
            array (
                'id' => 51,
                'desa' => 'Peunayong',
                'warna' => '#a87010',
                'geojson' => 'geojson/Sa8l7Fy6r7yT1yRIIkss5VBDcUOaJybcdoxVgFuP.json',
                'created_at' => '2022-04-16 13:50:43',
                'updated_at' => '2022-04-16 13:50:43',
            ),
            46 => 
            array (
                'id' => 52,
                'desa' => 'Batoh',
                'warna' => '#ff9999',
                'geojson' => 'geojson/6NOse4uJpjBPXFfcJqdTDOI7j07afvnQqln804qA.json',
                'created_at' => '2022-04-16 13:54:25',
                'updated_at' => '2022-04-16 13:54:25',
            ),
            47 => 
            array (
                'id' => 53,
                'desa' => 'Blang Cut',
                'warna' => '#f0b2c8',
                'geojson' => 'geojson/oGnTItgXASau7zcioTZVNjrIzDFD7tgJabzmiXyG.json',
                'created_at' => '2022-04-16 13:55:02',
                'updated_at' => '2022-04-16 13:55:02',
            ),
            48 => 
            array (
                'id' => 54,
                'desa' => 'Lamdom',
                'warna' => '#f0add4',
                'geojson' => 'geojson/yoL3NLdXJrkjLWPcalVQC0meybzO6VQVUHwvc7hS.json',
                'created_at' => '2022-04-16 13:55:24',
                'updated_at' => '2022-04-16 13:55:24',
            ),
            49 => 
            array (
                'id' => 55,
                'desa' => 'Lampaloh',
                'warna' => '#ffb3f9',
                'geojson' => 'geojson/gpmWHqul5cTCPZCHAPmCMrAwLQWHvFHXdw3QFNJB.json',
                'created_at' => '2022-04-16 13:55:57',
                'updated_at' => '2022-04-16 13:55:57',
            ),
            50 => 
            array (
                'id' => 56,
                'desa' => 'Lamseupeung',
                'warna' => '#f28af4',
                'geojson' => 'geojson/UOjR5B3Uz9GStlbXIsX6JHxNDtyCv5YhzyHkhAMJ.json',
                'created_at' => '2022-04-16 13:56:21',
                'updated_at' => '2022-04-16 13:56:21',
            ),
            51 => 
            array (
                'id' => 57,
                'desa' => 'Leung Bata',
                'warna' => '#c382f8',
                'geojson' => 'geojson/Yghu0vXFJVJXhkuPIAFh8xIe4oepyYnnpv1xepkw.json',
                'created_at' => '2022-04-16 13:56:45',
                'updated_at' => '2022-04-16 13:56:45',
            ),
            52 => 
            array (
                'id' => 58,
                'desa' => 'Panteriek',
                'warna' => '#a9a3ff',
                'geojson' => 'geojson/DIwgxHC4KSTosrOWJEahWnWqlUNshdc6SsuVZJo7.json',
                'created_at' => '2022-04-16 13:57:07',
                'updated_at' => '2022-04-16 13:57:07',
            ),
            53 => 
            array (
                'id' => 59,
                'desa' => 'Suka Damai',
                'warna' => '#90cef4',
                'geojson' => 'geojson/gaevTGoynsQRW6TyWpbk8haR0v91Av9NqQa9os0Z.json',
                'created_at' => '2022-04-16 13:57:34',
                'updated_at' => '2022-04-16 13:57:34',
            ),
            54 => 
            array (
                'id' => 60,
                'desa' => 'Alue Deah Teungoh',
                'warna' => '#a1d3f2',
                'geojson' => 'geojson/p3WprJWDRRSIy8KBcUCmnaOE2cKmxeegSo1mDX9n.json',
                'created_at' => '2022-04-16 13:57:59',
                'updated_at' => '2022-04-16 13:57:59',
            ),
            55 => 
            array (
                'id' => 61,
                'desa' => 'Asoe Nanggroe',
                'warna' => '#95eef4',
                'geojson' => 'geojson/9AwRZ9r9tYKh9ocVABGOPLlzlwtj4eaA9e7jKvHG.json',
                'created_at' => '2022-04-16 13:58:18',
                'updated_at' => '2022-04-16 13:58:18',
            ),
            56 => 
            array (
                'id' => 62,
                'desa' => 'Blang Oi',
                'warna' => '#94ebe0',
                'geojson' => 'geojson/ycbOoX7MotKsbXlT4mvbUsF2bbgOF0kXBEwkczYS.json',
                'created_at' => '2022-04-16 13:58:37',
                'updated_at' => '2022-04-16 13:58:37',
            ),
            57 => 
            array (
                'id' => 63,
                'desa' => 'Cot Lam Kuweuh',
                'warna' => '#7ee7bf',
                'geojson' => 'geojson/60zkBM9R5wwgWqlrnvdlrGMEFTNu18xlv7UE4CEv.json',
                'created_at' => '2022-04-16 13:59:00',
                'updated_at' => '2022-04-16 13:59:00',
            ),
            58 => 
            array (
                'id' => 64,
                'desa' => 'Deah Baro',
                'warna' => '#94f5b1',
                'geojson' => 'geojson/BY1Vxlheurh2jeXYjfYTsph26YdZOkFz7aMH1PEw.json',
                'created_at' => '2022-04-16 13:59:21',
                'updated_at' => '2022-04-16 13:59:21',
            ),
            59 => 
            array (
                'id' => 65,
                'desa' => 'Deah Glumpang',
                'warna' => '#9af788',
                'geojson' => 'geojson/6iEbtsRqsxasjOtl2JvshVEpxGXrvbZ1FMrVwVd3.json',
                'created_at' => '2022-04-16 13:59:47',
                'updated_at' => '2022-05-17 12:04:14',
            ),
            60 => 
            array (
                'id' => 66,
                'desa' => 'Gampong Baro',
                'warna' => '#cbf278',
                'geojson' => 'geojson/BUTtuQ0jVSJUR8j2UDHWc6bKA4Neo98fhmWP3MOv.json',
                'created_at' => '2022-04-16 14:00:20',
                'updated_at' => '2022-04-16 14:00:20',
            ),
            61 => 
            array (
                'id' => 67,
                'desa' => 'Gampong Blang',
                'warna' => '#e6eaa4',
                'geojson' => 'geojson/nGixoQm5V3WLS7f19xGE78sb470oQfOsgvl3oIiE.json',
                'created_at' => '2022-04-16 14:00:55',
                'updated_at' => '2022-04-16 14:00:55',
            ),
            62 => 
            array (
                'id' => 68,
                'desa' => 'Gampong Pie',
                'warna' => '#ffed94',
                'geojson' => 'geojson/8GEtOWzDex09lRSBtN2I2bobQ6z4hM62JLxelVAM.json',
                'created_at' => '2022-04-16 14:01:14',
                'updated_at' => '2022-04-16 14:01:14',
            ),
            63 => 
            array (
                'id' => 69,
                'desa' => 'Lambung',
                'warna' => '#ffef9e',
                'geojson' => 'geojson/KFHuh7Mzedq0b5KnKsOpaFM56B6WworN9bh9gjsJ.json',
                'created_at' => '2022-04-16 14:01:36',
                'updated_at' => '2022-04-16 14:01:36',
            ),
            64 => 
            array (
                'id' => 70,
                'desa' => 'Lamjabat',
                'warna' => '#ffb980',
                'geojson' => 'geojson/1BCVfr4XZ83DCbAyaYzo7MqAYhtzAkvHB7WksvvS.json',
                'created_at' => '2022-04-16 14:01:59',
                'updated_at' => '2022-04-16 14:01:59',
            ),
            65 => 
            array (
                'id' => 71,
                'desa' => 'Lampaseh Aceh',
                'warna' => '#ffcaad',
                'geojson' => 'geojson/FoLRssNYu51lZrnOkkR6ZLv1sdDgxwAKMPhFhSVO.json',
                'created_at' => '2022-04-16 14:02:26',
                'updated_at' => '2022-04-16 14:02:26',
            ),
            66 => 
            array (
                'id' => 72,
                'desa' => 'Punge Jurong',
                'warna' => '#ff9f75',
                'geojson' => 'geojson/2MGR8SVCm5i0jQAs7Gpokr2gQZEDgdCqHOyCsiYL.json',
                'created_at' => '2022-04-16 14:02:51',
                'updated_at' => '2022-04-16 14:03:21',
            ),
            67 => 
            array (
                'id' => 73,
                'desa' => 'Punge Ujong',
                'warna' => '#f9ad9f',
                'geojson' => 'geojson/7Ma9xrCgjf1cFpELGmusFyVdAz1wUn71r0eTmvr3.json',
                'created_at' => '2022-04-16 14:03:44',
                'updated_at' => '2022-04-16 14:03:44',
            ),
            68 => 
            array (
                'id' => 74,
                'desa' => 'Surien',
                'warna' => '#ffdbdb',
                'geojson' => 'geojson/nXxxv32qLBZX9HYAw9LXCF06p239DwOniDQU880q.json',
                'created_at' => '2022-04-16 14:04:07',
                'updated_at' => '2022-04-16 14:04:07',
            ),
            69 => 
            array (
                'id' => 75,
                'desa' => 'Ulee Lheue',
                'warna' => '#d1a8a8',
                'geojson' => 'geojson/RgMsItrx7iLgkUZxBRDnonNEZzHwoOwZGhf5p2xJ.json',
                'created_at' => '2022-04-16 14:17:47',
                'updated_at' => '2022-04-16 14:17:47',
            ),
            70 => 
            array (
                'id' => 76,
                'desa' => 'Alue Naga',
                'warna' => '#990000',
                'geojson' => 'geojson/oJOaf8BFPQOlpLjFCtpZULDeL4BTdLl1cZYFWSw2.json',
                'created_at' => '2022-04-16 14:18:35',
                'updated_at' => '2022-04-16 14:18:35',
            ),
            71 => 
            array (
                'id' => 77,
                'desa' => 'Deah Raya',
                'warna' => '#a3004f',
                'geojson' => 'geojson/RMaZETFZ3S1B6IgYZ2U6nRcFsjn3kDRbCpYalOCI.json',
                'created_at' => '2022-04-16 14:18:58',
                'updated_at' => '2022-04-16 14:18:58',
            ),
            72 => 
            array (
                'id' => 78,
                'desa' => 'Ie Masen Kayee Adang',
                'warna' => '#ad0076',
                'geojson' => 'geojson/6mqbCobY1L3t3m9lzIA1OE73wTCVpoAmEmGpX1Mu.json',
                'created_at' => '2022-04-16 14:19:24',
                'updated_at' => '2022-04-16 14:19:24',
            ),
            73 => 
            array (
                'id' => 79,
                'desa' => 'Jeulingke',
                'warna' => '#a800a3',
                'geojson' => 'geojson/VVtuEyD0hbJUDuFeHX2RoQUDXVUrRODbqa2uo64u.json',
                'created_at' => '2022-04-16 14:19:51',
                'updated_at' => '2022-04-16 14:19:51',
            ),
            74 => 
            array (
                'id' => 80,
                'desa' => 'Kopelma Darussalam',
                'warna' => '#490085',
                'geojson' => 'geojson/x8zD58g0z5g846C7CNCVgyRNkmoOSEUJ3FMVNTO7.json',
                'created_at' => '2022-04-16 14:20:10',
                'updated_at' => '2022-04-16 14:20:10',
            ),
            75 => 
            array (
                'id' => 81,
                'desa' => 'Lamgugob',
                'warna' => '#3d0099',
                'geojson' => 'geojson/IuR5lMQJVg9db5qiU0C2N0BAUsbKbL8OrH6LKatR.json',
                'created_at' => '2022-04-16 14:20:32',
                'updated_at' => '2022-04-16 14:20:32',
            ),
            76 => 
            array (
                'id' => 82,
                'desa' => 'Peurada',
                'warna' => '#0300b3',
                'geojson' => 'geojson/H1OlHLJZItFRl1Jwy7zB2cs3zuZ4ot7eCERDMiZQ.json',
                'created_at' => '2022-04-16 14:20:59',
                'updated_at' => '2022-04-16 14:20:59',
            ),
            77 => 
            array (
                'id' => 83,
                'desa' => 'Pineung',
                'warna' => '#004a99',
                'geojson' => 'geojson/Ia3H05GOZZR5dsc7yGmBfgbIGPCL1GlWvkJ3icSf.json',
                'created_at' => '2022-04-16 14:21:24',
                'updated_at' => '2022-04-16 14:21:24',
            ),
            78 => 
            array (
                'id' => 84,
                'desa' => 'Rukoh',
                'warna' => '#006e8a',
                'geojson' => 'geojson/GhqbPQywYgLzuKHw1ZQHXeCsI6ad532xdkXecLkF.json',
                'created_at' => '2022-04-16 14:21:54',
                'updated_at' => '2022-04-16 14:21:54',
            ),
            79 => 
            array (
                'id' => 85,
                'desa' => 'Tibang',
                'warna' => '#009194',
                'geojson' => 'geojson/4EEI4QnJS5hoS5JqLyAXEene7hDOq1fc6WKRwKSE.json',
                'created_at' => '2022-04-16 14:22:28',
                'updated_at' => '2022-04-16 14:22:28',
            ),
            80 => 
            array (
                'id' => 86,
                'desa' => 'Ceurih',
                'warna' => '#008a3c',
                'geojson' => 'geojson/IQJzIH8lkCpeqMJ9uE82EobUfHtNyMZkZCHKjKYJ.json',
                'created_at' => '2022-04-16 14:22:50',
                'updated_at' => '2022-04-16 14:22:50',
            ),
            81 => 
            array (
                'id' => 87,
                'desa' => 'Doi',
                'warna' => '#098a00',
                'geojson' => 'geojson/SimGNuNZ39QzF0puiH7jcSW7UI5sbX14sQzzCPBs.json',
                'created_at' => '2022-04-16 14:23:07',
                'updated_at' => '2022-04-16 14:23:07',
            ),
            82 => 
            array (
                'id' => 88,
                'desa' => 'Ie Masen Ulee Kareng',
                'warna' => '#0a9900',
                'geojson' => 'geojson/FTwdVvwcLLQnnht4RSncgdtKyGEhB1VObuJfTnt2.json',
                'created_at' => '2022-04-16 14:23:29',
                'updated_at' => '2022-04-16 14:23:29',
            ),
            83 => 
            array (
                'id' => 89,
                'desa' => 'Ilie',
                'warna' => '#84a800',
                'geojson' => 'geojson/wYBre9yrR8CitHxSsm3s3xm99X20jBqPf1BbQI8M.json',
                'created_at' => '2022-04-16 14:23:49',
                'updated_at' => '2022-04-16 14:23:49',
            ),
            84 => 
            array (
                'id' => 90,
                'desa' => 'Lambhuk',
                'warna' => '#947b00',
                'geojson' => 'geojson/jROjwq4R6S6u7Ybgvao9n4vuawgGgsm7gIRQtzJV.json',
                'created_at' => '2022-04-16 14:24:07',
                'updated_at' => '2022-04-16 14:24:07',
            ),
            85 => 
            array (
                'id' => 91,
                'desa' => 'Lamglumpang',
                'warna' => '#9e5c00',
                'geojson' => 'geojson/7Jp9VvMoU5Ilb33Pg64qSB5n2SJJDZZbYyk3cL2A.json',
                'created_at' => '2022-04-16 14:24:25',
                'updated_at' => '2022-04-16 14:24:25',
            ),
            86 => 
            array (
                'id' => 92,
                'desa' => 'Lamteh',
                'warna' => '#a32100',
                'geojson' => 'geojson/78nVEu5QBu0JNDiaXeStpm10ANxJa0o18U8ABxPc.json',
                'created_at' => '2022-04-16 14:24:49',
                'updated_at' => '2022-04-16 14:24:49',
            ),
            87 => 
            array (
                'id' => 93,
                'desa' => 'Pango Deah',
                'warna' => '#c93182',
                'geojson' => 'geojson/bkg3crh8bM0CekAGLRaIqAwJHE7B5e0aXwlhO2wF.json',
                'created_at' => '2022-04-16 14:25:15',
                'updated_at' => '2022-04-16 14:25:15',
            ),
            88 => 
            array (
                'id' => 95,
                'desa' => 'Pango Raya',
                'warna' => '#c00acd',
                'geojson' => 'geojson/vojLXEAHNnfOU1GsNTFBaAFPxBCpPjGkoGTtg4IQ.json',
                'created_at' => '2022-04-23 07:12:34',
                'updated_at' => '2022-04-23 07:12:34',
            ),
        ));
        
        
    }
}