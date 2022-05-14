<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!--

Template 2091 Ziggy

http://www.tooplate.com/view/2091-ziggy

-->
    <title>Vaksinasi COVID-19 Dinas Kesehatan Kota Banda Aceh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('storage/css/tooplate-style.css') }}" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <!-- Leaflet CSS -->
    <style>
        #map {
            min-height: 600px;
        }

        .leaflet-control-attribution {
            display: none !important
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend {
            text-align: left;
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

        .leaflet-routing-container {
            background-color: white;
            padding: 1rem
        }

        .leaflet-right {
            max-width: 50%;
        }

    </style>

</head>

<body>


    <section class="w-100 " style="background-color: #4F8A8B">
        <a href="{{ route('login') }}" class="text-decoration-none text-white m-4 py-1 btn btn-outline-light me-2">
            <h4>Log in</h4>
        </a>
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Home</h4>
        </a>
        <a href="{{ route('RuteUser') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Rute</h4>
        </a>
        <a href="{{ route('panduan-user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn"
            style="border-bottom:1px solid white;">
            <h4>Panduan</h4>
        </a>
        <a href="{{ route('pendaftaran') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Daftar Vaksinasi</h4>
        </a>
    </section>

    <section class="second-section" style=" background-color: #EDE6DB">
        <div class="container">
            <div class="card p-4">
                <div class="col-md-8">
                    <h3><b>Cara Melakukan Pendaftaran Vaksinasi
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    1
                                </span>
                            </div>
                            <div class="col-md-6">
                                Tekan tombol "Daftar Vaksinasi"
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/daftar.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    2
                                </span>
                            </div>
                            <div class="col-md-8">
                                Isi data diri Anda, lalu tekan tombol daftar
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/IsiData.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="card p-4">
                <div class="col">
                    <h3><b>Jika Anda Pihak Gerai Vaksin/PUSKESMAS/Rumah Sakit
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    1
                                </span>
                            </div>
                            <div class="col-md-8">
                                Login menggunakan Akun yang sudah diberikan
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/LoginRS.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    2
                                </span>
                            </div>
                            <div class="col-md-10">
                                Tekan tombol ceklis jika masyarakat berhasil melakukan vaksinasi dan tekan tombol hapus
                                jika masyarakat batal melakukan vaksinasi
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/DataDaftar.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    3
                                </span>
                            </div>
                            <div class="col-md-10">
                                Menu untuk melihat data yang sudah terverifikasi, jika data sudah
                                tidak dibutuhkan tekan tombol hapus
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/verifikasi.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="card p-4">
                <div class="col">
                    <h3><b>Jika Anda Pihak Dinas Kesehatan
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    1
                                </span>
                            </div>
                            <div class="col-md-8">
                                Login menggunakan Akun yang sudah diberikan
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/loginAdmin.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    2
                                </span>
                            </div>
                            <div class="col-md-10">
                                Menu dashboard akan menampilkan informasi capaian vaksinasi
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/dashboard.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    3
                                </span>
                            </div>
                            <div class="col-md-10">
                                Menu Maps menampilkan beberapa informasi dalam bentuk peta seperti sebaran lokasi, desa,
                                kecamatan dan rute
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/lokasi.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-md-1">
                                <span class="bg-success text-white rounded-circle px-2" style="width: fit-content">
                                    4
                                </span>
                            </div>
                            <div class="col-md-10">
                                Menu Data menampilkan beberapa informasi dalam bentuk tabel seperti data vaksinasi, data
                                lokasi,
                                data desa, data kecamatan dan data user. Pada halaman ini Admin juga dapat melakukan
                                input data atau edit data
                            </div>
                        </div>
                        <img width="700" src="{{ asset('storage/img/data.png') }}" alt="">
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="https://web.facebook.com/search/top?q=dinas%20kesehatan%20kota%20banda%20aceh"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://dinkes.bandaacehkota.go.id/"><i class="fa fa-globe"></i></a></li>
                    </ul>
                    <p class="text-white">Dinas Kesehatan Kota Banda Aceh | 2022 </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

</body>

</html>
