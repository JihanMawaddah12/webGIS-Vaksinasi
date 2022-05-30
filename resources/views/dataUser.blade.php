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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <style>
        h3 {
            font-size: 1rem;
        }

        .leaflet-control-attribution {
            display: none !important
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: #EEEEEE;
            background: #EEEEEE(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h2 {
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

        .pie {

            height: 262px !important;
            width: 524px;

        }

        .progress {
            background-color: rgba(0, 0, 0, 0.125) !important;
            height: 2px !important;
            margin: 5px 0 !important;
        }

        .progress .progress-bar {
            background-color: #fff !important;
        }

        .info-box-icon {
            font-size: 1.875rem;
        }

    </style>
</head>

<body>

    <section class="w-100 text-sm" style="background-color: #4F8A8B">
        <a href="{{ route('login') }}" class="text-decoration-none text-white m-4 py-1 btn btn-outline-light me-2">
            <h6>Log in</h6>
        </a>
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn"
            style="border-bottom:1px solid white;">
            <h6>Home</h6>
        </a>
        <a href="{{ route('RuteUser') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h6>Rute</h6>
        </a>
        <a href="{{ route('panduan-user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h6>Panduan</h6>
        </a>
        <a href="{{ route('pendaftaran') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h6>Daftar Vaksinasi</h6>
        </a>
    </section>

    <section class="second-section text-center" style=" background-color: #ffffff">
        <h1><b> Vaksinasi COVID-19 Kota Banda Aceh</h1><br>
        <div class="me-5 ms-5">
            <div class="row">
                <div class="col-lg-3 mb-2">
                    <!-- small box -->
                    <div class="card shadow py-2" style="background-color: #5EAAA8">
                        <div class="row">
                            <div class="col-md-3 align-self-center">
                                <span class="info-box-icon">
                                    <i class="fa fa-book-medical" style="color:#EDE6DB"> </i>
                                </span>
                            </div>
                            <div class="col-md-7 d-flex flex-column text-white text-start">
                                <p>Sasaran Vaksinasi</p>
                                <span class="info-box-number"
                                    style="font-size:15px !important">{{ $target }}</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="Progress-description" style="font-size:15px !important">
                                    100%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 mb-2">
                    <!-- small box -->
                    <div class="card shadow py-2" style="background-color: #5EAAA8">
                        <div class="row">
                            <div class="col-md-3 align-self-center">
                                <span class="info-box-icon">
                                    <i class="fa fa-syringe" style="color:#EDE6DB"></i>
                                </span>
                            </div>
                            <div class="col-md-7 d-flex flex-column text-white text-start">
                                <p>Total Vaksinasi Dosis 1</p>
                                <span class="info-box-number"
                                    style="font-size:15px !important">{{ $dosis1 }}</span>
                                <div class="progress">
                                    <div class="progress-bar"
                                        style="width: {{ $dosis1 ? number_format((float) ($dosis1 / $target) * 100, 2, '.', '') : 0 }}% ">
                                    </div>
                                </div>
                                <span class="Progress-description" style="font-size:15px !important">
                                    @if ($dosis1)
                                        {{ number_format((float) ($dosis1 / $target) * 100, 2, '.', '') }}%
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 mb-2">
                    <!-- small box -->
                    <div class="card shadow py-2" style="background-color: #5EAAA8">
                        <div class="row">
                            <div class="col-md-3 align-self-center">
                                <span class="info-box-icon">
                                    <i class="fa fa-syringe" style="color:#EDE6DB"></i>
                                </span>
                            </div>
                            <div class="col-md-7 d-flex flex-column text-white text-start">
                                <p>Total Vaksinasi Dosis 2</p>
                                <span class="info-box-number"
                                    style="font-size:15px !important">{{ $dosis2 }}</span>
                                <div class="progress">
                                    <div class="progress-bar"
                                        style="width: {{ $dosis2 ? number_format((float) ($dosis2 / $target) * 100, 2, '.', '') : 0 }}% ">
                                    </div>
                                </div>
                                <span class="Progress-description" style="font-size:15px !important">
                                    @if ($dosis2)
                                        {{ number_format((float) ($dosis2 / $target) * 100, 2, '.', '') }}%
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 mb-2">
                    <!-- small box -->
                    <div class="card shadow py-2" style="background-color: #5EAAA8">
                        <div class="row">
                            <div class="col-md-3 align-self-center">
                                <span class="info-box-icon">
                                    <i class="fa fa-syringe" style="color:#EDE6DB"></i>
                                </span>
                            </div>
                            <div class="col-md-7 d-flex flex-column text-white text-start">
                                <p>Total Vaksinasi Dosis 3</p>
                                <span class="info-box-number"
                                    style="font-size:15px !important">{{ $dosis3 }}</span>
                                <div class="progress">
                                    <div class="progress-bar"
                                        style="width: {{ $dosis3 ? number_format((float) ($dosis3 / $target) * 100, 2, '.', '') : 0 }}% ">
                                    </div>
                                </div>
                                <span class="Progress-description" style="font-size:15px !important">
                                    @if ($dosis3)
                                        {{ number_format((float) ($dosis3 / $target) * 100, 2, '.', '') }}%
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="mb-2">

                <div class="row">

                    <section class="col connectedSortable">
                        <div class="card" style="background-color: #c0d3d2">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Grafik
                                </h3>

                                <div class="card-tools mx-2">

                                    <select class="form-control" id="kecamatan" name="kecamatan">
                                        <option disabled selected value="">--Pilih Kecamatan--</option>
                                        @foreach ($tematik as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $state == $item->id ? 'selected' : '' }}>
                                                {{ $item->kecamatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body" style="background-color: #D4ECDD">
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" onclick="return state = 'grafik1'"
                                                href="#grafik1-button" data-bs-toggle="tab">Dosis
                                                1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="return state = 'grafik2'"
                                                href="#grafik2-button" data-bs-toggle="tab">Dosis
                                                2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="return state = 'grafik3'"
                                                href="#grafik3-button" data-bs-toggle="tab">Dosis
                                                3</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content p-0">
                                    <!-- Morris chart - Sales -->
                                    <div class="chart tab-pane active" id="grafik1-button"
                                        style="position: relative; height: 300px;">
                                        <canvas id="grafik1" height="300" style="height: 300px;"></canvas>
                                    </div>
                                    <div class="chart tab-pane" id="grafik2-button"
                                        style="position: relative; height: 300px;">
                                        <canvas id="grafik2" height="300" style="height: 300px;"></canvas>
                                    </div>
                                    <div class="chart tab-pane" id="grafik3-button"
                                        style="position: relative; height: 300px;">
                                        <canvas id="grafik3" height="300" style="height: 300px;"></canvas>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                    </section>

                </div>
            </div>
<<<<<<< HEAD
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color:#D0CAB2">
                            <h3 class="card-title">Dosis Terendah<br>(Kecamatan)</h3>
                            <div class="card-tools">
=======
            <div class="row gy-2">
                <div class="col-md-3">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color:#D0CAB2">
                            <h3 class="float-start text-white">Dosis Terendah<br>(Kecamatan)</h3>
                            <div class="card-tools float-end">
>>>>>>> 591a356c9c55e023097dc33bd5affd77fbc1847e
                                <button type="button" class="btn" data-bs-toggle="collapse"
                                    data-bs-target="#dosis1">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body collapse" id="dosis1">
                            <h3 style="font-size:20px !important">Dosis 1</h3>
                            @if ($krendah1)
                                <h6>Kecamatan {{ $krendah1->tematik->kecamatan }}</h6>
                                <h6>Jumlah {{ $krendah1->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $krpersen1 ? number_format((float) ($krendah1->total / $krpersen1) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                            <hr class="text-white bg-black" />
                            <h3 style="font-size:20px !important">Dosis 2</h3>
                            @if ($krendah2)
                                <h6>Kecamatan {{ $krendah2->tematik->kecamatan }}</h6>
                                <h6>Jumlah {{ $krendah2->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $krpersen2 ? number_format((float) ($krendah2->total / $krpersen2) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                            <hr class="text-white bg-black" />
                            <h3 style="font-size:20px !important">Dosis 3</h3>
                            @if ($krendah3)
                                <h6>Kecamatan {{ $krendah3->tematik->kecamatan }}</h6>
                                <h6>Jumlah {{ $krendah3->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $krpersen3 ? number_format((float) ($krendah3->total / $krpersen3) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- ./col -->
<<<<<<< HEAD
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" style="background-color:#96C7C1">
                            <h3 class="card-title text-white">Dosis Tertinggi<br>(Kecamatan)</h3>
                            <div class="card-tools">
=======

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-start " style="background-color:#96C7C1">
                            <h3 class="float-start text-white">Dosis Tertinggi<br>(Kecamatan)</h3>
                            <div class="card-tools float-end">
>>>>>>> 591a356c9c55e023097dc33bd5affd77fbc1847e
                                <button type="button" class="btn" data-bs-toggle="collapse"
                                    data-bs-target="#dosis2">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body collapse" id="dosis2">
                            <h3 style="font-size:20px !important">Dosis 1</h3>
                            @if ($ktinggi1)
                                <h6>Kecamatan {{ $ktinggi1->tematik->kecamatan }}</h6>
                                <h6>Jumlah {{ $ktinggi1->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $ktpersen1 ? number_format((float) ($ktinggi1->total / $ktpersen1) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                            <hr class="text-white bg-green" />
                            <h3 style="font-size:20px !important">Dosis 2</h3>
                            @if ($ktinggi2)
                                <h6>Kecamatan {{ $ktinggi2->tematik->kecamatan }}</h6>
                                <h6>Jumlah {{ $ktinggi2->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $ktpersen2 ? number_format((float) ($ktinggi2->total / $ktpersen2) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                            <hr class="text-white bg-green" />
                            <h3 style="font-size:20px !important">Dosis 3</h4>
                                @if ($ktinggi3)
                                    <h6>Kecamatan {{ $ktinggi3->tematik->kecamatan }}</h6>
                                    <h6>Jumlah {{ $ktinggi3->total }}</h6>
                                    <h3 style="font-size:20px !important">
                                        {{ $ktpersen3 ? number_format((float) ($ktinggi3->total / $ktpersen3) * 100, 2, '.', '') : 0 }}%
                                    </h3>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" style="background-color:#DED9C4">
<<<<<<< HEAD
                            <h3 class="card-title text-white">Dosis Terendah<br>(Desa)</h3>
                            <div class="card-tools">
=======
                            <h3 class="float-start text-white">Dosis Terendah<br>(Desa)</h3>
                            <div class="card-tools float-end">
>>>>>>> 591a356c9c55e023097dc33bd5affd77fbc1847e
                                <button type="button" class="btn" data-bs-toggle="collapse"
                                    data-bs-target="#dosis3">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body collapse" id="dosis3">
                            <h3 style="font-size:20px !important">Dosis 1</h3>
                            @if ($drendah1)
                                <h6>Desa {{ $drendah1->desa->desa }}</h6>
                                <h6>Jumlah {{ $drendah1->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $drpersen1 ? number_format((float) ($drendah1->total / $drpersen1) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                            <hr class="text-white bg-black" />
                            <h3 style="font-size:20px !important">Dosis 2</h3>
                            @if ($drendah2)
                                <h6>Desa {{ $drendah2->desa->desa }}</h6>
                                <h6>Jumlah {{ $drendah2->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $drpersen2 ? number_format((float) ($drendah2->total / $drpersen2) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                            <hr class="text-white bg-black" />
                            <h3 style="font-size:20px !important">Dosis 3</h3>
                            @if ($drendah3)
                                <h6>Desa {{ $drendah3->desa->desa }}</h6>
                                <h6>Jumlah {{ $drendah3->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $drpersen3 ? number_format((float) ($drendah3->total / $drpersen3) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                        </div>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" style="background-color:#89b5af">
<<<<<<< HEAD
                            <h3 class="card-title text-white">Dosis Tertinggi<br>(Desa)</h3>
                            <div class="card-tools">
=======
                            <h3 class="float-start text-white">Dosis Tertinggi<br>(Desa)</h3>
                            <div class="card-tools float-end">
>>>>>>> 591a356c9c55e023097dc33bd5affd77fbc1847e
                                <button type="button" class="btn" data-bs-toggle="collapse"
                                    data-bs-target="#dosis4">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body collapse" id="dosis4">
                            <h3 style="font-size:20px !important"> Dosis 1 </h3>
                            @if ($dtinggi1)
                                <h6>Desa {{ $dtinggi1->desa->desa }}</h6>
                                <h6>Jumlah {{ $dtinggi1->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $dtpersen1 ? number_format((float) ($dtinggi1->total / $dtpersen1) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                            <hr class="text-white bg-black">
                            <h3 style="font-size:20px !important"> Dosis 2 </h3>
                            @if ($dtinggi2)
                                <h6>Desa {{ $dtinggi2->desa->desa }}</h6>
                                <h6>Jumlah {{ $dtinggi2->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $dtpersen2 ? number_format((float) ($dtinggi2->total / $dtpersen2) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                            <hr class="text-white bg-black">
                            <h3 style="font-size:20px !important">
                                Dosis 3 </h3>
                            @if ($dtinggi3)
                                <h6>Desa {{ $dtinggi3->desa->desa }}</h6>
                                <h6>Jumlah {{ $dtinggi3->total }}</h6>
                                <h3 style="font-size:20px !important">
                                    {{ $dtpersen3 ? number_format((float) ($dtinggi3->total / $dtpersen3) * 100, 2, '.', '') : 0 }}%
                                </h3>
                            @endif

                        </div>
                    </div>
                </div>
<<<<<<< HEAD
                <section class="col-lg-6 col-6">
                    <div class="card" style="background-color: #D4ECDD">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                Maps
                            </h3>
=======
                <div class="card">
                    <div class="card-header text-start">
                        <h3 class="card-title">Tenaga Kesehatan</h3>

                    </div>
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="chart-responsive" id="pie">
                                    <div id="dosis1-pie" class="collapse show">
                                        <canvas id="pie-dosis1" height="393" width="789" class="pie">
                                    </div>
                                    <div id="dosis2-pie" class="collapse">
                                        <canvas id="pie-dosis2" height="393" width="789" class="pie">
                                    </div>
                                    <div id="dosis3-pie" class="collapse">
                                        <canvas id="pie-dosis3" height="393" width="789" class="pie">
                                    </div>
                                </div>
                            </div>
>>>>>>> 591a356c9c55e023097dc33bd5affd77fbc1847e

                        </div>
<<<<<<< HEAD
                        <div class="card-body">
                            <div id="map" style="height: 380px; width: 100%;"></div>
                        </div>
=======
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-4">
                        <br>
                        <div class="p-4 w-100 rounded shadow text-white text-start" style="background-color:#68B0AB">
                            <h3 style="font-size:20px !important">Tenaga Kesehatan</h3>
                            <hr class="text-white bg-white" />
                            <div class="inner">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 1</h3>
                                        @if ($dosis1_nakes)
                                            <h6>Jumlah {{ $dosis1_nakes }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis1_nakes / $target_nakes) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 2</h3>
                                        @if ($dosis2_nakes)
                                            <h6>Jumlah {{ $dosis2_nakes }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis2_nakes / $target_nakes) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 3</h3>
                                        @if ($dosis3_nakes)
                                            <h6>Jumlah {{ $dosis3_nakes }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis3_nakes / $target_nakes) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <br>
                        <div class="p-4 w-100 rounded shadow text-black text-start" style="background-color:#A3D2CA">
                            <h3 style="font-size:20px !important">Petugas Publik</h3>
                            <hr class="text-white bg-white" />
                            <div class="inner">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 1</h3>
                                        @if ($dosis1_petugas)
                                            <h6>Jumlah {{ $dosis1_petugas }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis1_petugas / $target_petugas) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif
>>>>>>> 591a356c9c55e023097dc33bd5affd77fbc1847e

                    </div>
<<<<<<< HEAD
                </section>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Capaian Kelompok</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card="collapse">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive" id="pie">
                                        <div id="dosis1-pie" class="collapse show">
                                            <canvas id="pie-dosis1" height="393" width="789" class="pie">
                                        </div>
                                        <div id="dosis2-pie" class="collapse">
                                            <canvas id="pie-dosis2" height="393" width="789" class="pie">
                                        </div>
                                        <div id="dosis3-pie" class="collapse">
                                            <canvas id="pie-dosis3" height="393" width="789" class="pie">
                                        </div>
                                    </div>
                                </div>
=======
                    <div class="col-lg-4 col-4">
                        <br>
                        <div class="p-4 w-100 rounded shadow text-white text-start" style="background-color:#5EAAA8">
                            <h3 style="font-size:20px !important">Lansia</h3>
                            <hr class="text-white bg-white" />
                            <div class="inner">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 1</h3>
                                        @if ($dosis1_lansia)
                                            <h6>Jumlah {{ $dosis1_lansia }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis1_lansia / $target_lansia) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 2</h3>
                                        @if ($dosis2_lansia)
                                            <h6>Jumlah {{ $dosis2_lansia }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis2_lansia / $target_lansia) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 3</h3>
                                        @if ($dosis3_lansia)
                                            <h6>Jumlah {{ $dosis3_lansia }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis3_lansia / $target_lansia) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <br>
                        <div class="p-4 w-100 rounded shadow text-black text-start" style="background-color:#A7C4BC">
                            <h3 style="font-size:20px !important">Masyarakat Umum</h3>
                            <hr class="text-white bg-white" />
                            <div class="inner">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 1</h3>
                                        @if ($dosis1_masyarakat)
                                            <h6>Jumlah {{ $dosis1_masyarakat }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis1_masyarakat / $target_masyarakat) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 2</h3>
                                        @if ($dosis2_masyarakat)
                                            <h6>Jumlah {{ $dosis2_masyarakat }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis2_masyarakat / $target_masyarakat) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 3</h3>
                                        @if ($dosis3_masyarakat)
                                            <h6>Jumlah {{ $dosis3_masyarakat }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis3_masyarakat / $target_masyarakat) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <br>
                        <div class="p-4 w-100 rounded shadow text-white text-start" style="background-color:#5E8B7E">
                            <h3 style="font-size:20px !important">Remaja</h3>
                            <hr class="text-white bg-white" />
                            <div class="inner">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 1</h3>
                                        @if ($dosis1_remaja)
                                            <h6>Jumlah {{ $dosis1_remaja }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis1_remaja / $target_remaja) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 2</h3>
                                        @if ($dosis2_remaja)
                                            <h6>Jumlah {{ $dosis2_remaja }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis2_remaja / $target_remaja) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif
>>>>>>> 591a356c9c55e023097dc33bd5affd77fbc1847e

                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li>
                                            <button class="btn bg-transparent" id="bdosis1">
                                                <i class="far fa-circle text-danger">
                                                </i>
                                                Dosis 1
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn bg-transparent" id="bdosis2">
                                                <i class="far fa-circle text-success"></i>
                                                Dosis 2
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn bg-transparent" id="bdosis3">
                                                <i class="far fa-circle text-warning"></i>
                                                Dosis 3
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                </div>
=======
                    <div class="col-lg-4 col-4">
                        <br>
                        <div class="p-4 w-100 rounded shadow text-white text-start" style="background-color:#2F5D62">
                            <h3 style="font-size:20px !important">Usia 6-11 tahun</h3>
                            <hr class="text-white bg-white" />
                            <div class="inner">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 1</h3>
                                        @if ($dosis1_usia)
                                            <h6>Jumlah {{ $dosis1_usia }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis1_usia / $target_usia) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 2</h3>
                                        @if ($dosis2_usia)
                                            <h6>Jumlah {{ $dosis2_usia }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis2_usia / $target_usia) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif

                                    </div>
                                    <div class="col">
                                        <h3 style="font-size:20px !important">Dosis 3</h3>
                                        @if ($dosis3_usia)
                                            <h6>Jumlah {{ $dosis3_usia }}</h6>
                                            <h3 style="font-size:20px !important">
                                                {{ number_format((float) ($dosis3_usia / $target_usia) * 100, 2, '.', '') }}%
                                            </h3>
                                        @endif
>>>>>>> 591a356c9c55e023097dc33bd5affd77fbc1847e



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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        < /scrip> <
        script >
            window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script>
        $('#kecamatan').change(function() {
            window.location.href = '/portal/' + this.value;
        });
    </script>
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $("#bdosis1").click(function() {
            $("#dosis1-pie").collapse("show");
            $("#dosis2-pie").collapse("hide");
            $("#dosis3-pie").collapse("hide");
        });
        $("#bdosis2").click(function() {
            $("#dosis2-pie").collapse("show");
            $("#dosis1-pie").collapse("hide");
            $("#dosis3-pie").collapse("hide");
        });
        $("#bdosis3").click(function() {
            $("#dosis3-pie").collapse("show");
            $("#dosis1-pie").collapse("hide");
            $("#dosis2-pie").collapse("hide");
        });
    });
</script>
<script>
    var labelPie = ['Nakes', 'Petugas', 'Lansia', 'Masyarakat', 'Remaja', 'Usia'];
    const dataPie = {
        labels: labelPie,
        datasets: [{
            label: 'Dosis 1 ',
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'purple',
                'blue',
                'red',
                'green'
            ],
            borderColor: 'rgb(255, 99, 132)',
            data: [{!! json_encode($dosis1_nakes) !!}, {!! json_encode($dosis1_petugas) !!}, {!! json_encode($dosis1_lansia) !!},
                {!! json_encode($dosis1_masyarakat) !!}, {!! json_encode($dosis1_remaja) !!}, {!! json_encode($dosis1_usia) !!}
            ],

        }],
    };
    const pluginPie = {
        id: 'custom_canvas_background_color1',
        beforeDraw: (chart) => {
            const ctx = chart.canvas.getContext('2d');
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'white';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };
    const configPie = {
        type: 'pie',
        data: dataPie,
        plugins: [pluginPie],
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    min: 0,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    };
    const myChartPie = new Chart(
        document.getElementById('pie-dosis1'),
        configPie
    );
</script>
<script>
    var labelPie2 = ['Nakes', 'Petugas', 'Lansia', 'Masyarakat', 'Remaja', 'Usia'];
    const dataPie2 = {
        labels: labelPie2,
        datasets: [{
            label: 'Dosis 2 ',
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'purple',
                'blue',
                'red',
                'green'
            ],
            borderColor: 'rgb(255, 99, 132)',
            data: [{!! json_encode($dosis2_nakes) !!}, {!! json_encode($dosis2_petugas) !!}, {!! json_encode($dosis2_lansia) !!},
                {!! json_encode($dosis2_masyarakat) !!}, {!! json_encode($dosis2_remaja) !!}, {!! json_encode($dosis2_usia) !!}
            ],

        }],
    };
    const pluginPie2 = {
        id: 'custom_canvas_background_color1',
        beforeDraw: (chart) => {
            const ctx = chart.canvas.getContext('2d');
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'white';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };
    const configPie2 = {
        type: 'pie',
        data: dataPie2,
        plugins: [pluginPie2],
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    min: 0,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    };
    const myChartPie2 = new Chart(
        document.getElementById('pie-dosis2'),
        configPie2
    );
</script>
<script>
    var labelPie3 = ['Nakes', 'Petugas', 'Lansia', 'Masyarakat', 'Remaja', 'Usia'];
    const dataPie3 = {
        labels: labelPie3,
        datasets: [{
            label: 'Dosis 2 ',
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'purple',
                'blue',
                'red',
                'green'
            ],
            borderColor: 'rgb(255, 99, 132)',
            data: [{!! json_encode($dosis3_nakes) !!}, {!! json_encode($dosis3_petugas) !!}, {!! json_encode($dosis3_lansia) !!},
                {!! json_encode($dosis3_masyarakat) !!}, {!! json_encode($dosis3_remaja) !!}, {!! json_encode($dosis3_usia) !!}
            ],

        }],
    };
    const pluginPie3 = {
        id: 'custom_canvas_background_color1',
        beforeDraw: (chart) => {
            const ctx = chart.canvas.getContext('2d');
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'white';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };
    const configPie3 = {
        type: 'pie',
        data: dataPie3,
        plugins: [pluginPie3],
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    min: 0,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    };
    const myChartPie3 = new Chart(
        document.getElementById('pie-dosis3'),
        configPie3
    );
</script>
<script>
    var labels = {!! json_encode($kec) !!};
    const data = {
        labels: labels,
        datasets: [{
            label: 'Dosis 1 ' + {!! json_encode($tem) !!},
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: {!! json_encode($jumlah) !!},
        }],
    };
    const plugin = {
        id: 'custom_canvas_background_color1',
        beforeDraw: (chart) => {
            const ctx = chart.canvas.getContext('2d');
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'white';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };
    const config = {
        type: 'line',
        data: data,
        plugins: [plugin],
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    min: 0,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    };
    const myChart = new Chart(
        document.getElementById('grafik1'),
        config
    );
</script>
<script>
    var labels2 = {!! json_encode($kec2) !!};
    const data2 = {
        labels: labels2,
        datasets: [{
            label: 'Dosis 2 ' + {!! json_encode($tem) !!},
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: {!! json_encode($jumlah2) !!},

        }],
    };
    const plugin2 = {
        id: 'custom_canvas_background_color2',
        beforeDraw: (chart) => {
            const ctx = chart.canvas.getContext('2d');
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'white';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };
    const config2 = {
        type: 'line',
        data: data2,
        plugins: [plugin2],
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    min: 0,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    };

    const myChart2 = new Chart(
        document.getElementById('grafik2'),
        config2
    );
</script>
<script>
    var labels3 = {!! json_encode($kec3) !!};
    const data3 = {
        labels: labels3,
        datasets: [{
            label: 'Dosis 3 ' + {!! json_encode($tem) !!},
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: {!! json_encode($jumlah3) !!},

        }],
    };
    const plugin3 = {
        id: 'custom_canvas_background_color3',
        beforeDraw: (chart) => {
            const ctx = chart.canvas.getContext('2d');
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'white';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };
    const config3 = {
        type: 'line',
        data: data3,
        plugins: [plugin3],
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    min: 0,
                    ticks: {
                        stepSize: 5
                    }
                }
            }
        }
    };
    const myChart3 = new Chart(
        document.getElementById('grafik3'),
        config3
    );
</script>
<!-- Leaflet JavaScript -->
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.css" />
<script src="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.js"></script>
<script type="text/javascript">
    var s = [5.554630942893766, 95.31709742351293];
    var color = {!! json_encode($color) !!};
    var datamap = {!! json_encode($data) !!}
    var map = L.map('map').setView(
        s, 11
    );


    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    var info = L.control();

    info.onAdd = function(map) {
        this._div = L.DomUtil.create('div', 'info');
        this.update();
        return this._div;
    };
    //menampilkan pop up info tematik
    info.update = function(props) {

    };

    info.addTo(map);

    function style(feature) {
        return {
            weight: 2,
            opacity: 1,
            color: 'black',
            dashArray: '3',
            fillOpacity: 0.7,
            fillColor: color[feature.properties.NAMOBJ]
        };

    }
    //memunculkan highlight pada peta
    function highlightFeature(e) {
        var layer = e.target;

        layer.setStyle({
            weight: 5,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
        });

        if (!L.Browser.ie && !L.Browser.opera) {
            layer.bringToFront();
        }

        info.update(layer.feature.properties);
    }

    var geojson;

    function resetHighlight(e) {
        geojsonLayer.resetStyle(e.target);
        info.update();
    }

    function zoomToFeature(e) {
        map.fitBounds(e.target.getBounds());
    }

    function onEachFeature(feature, layer) {
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }
    var geojsonLayer = new L.GeoJSON.AJAX({!! json_encode($geofile) !!}, {
        style: style,
        onEachFeature: onEachFeature
    });
    geojsonLayer.addTo(map);

    var legend = L.control({
        position: 'bottomright'
    });

    var markersLayer = new L.LayerGroup(); //layer contain searched elements
    map.addLayer(markersLayer);
    var controlSearch = new L.Control.Search({
        position: 'topleft',
        layer: markersLayer,
        initial: false,
        zoom: 12,
        marker: false,
        autoType: false
    });

    controlSearch.on('search:locationfound', function(e) {

        e.layer.openPopup();

    }).on('search:collapsed', function(e) {});


    map.addControl(controlSearch);
    for (var i = 0; i < datamap.length; i++) {
        var title = datamap[i][0], //value searched
            loc = [datamap[i][1], datamap[i][2]], //position found
            marker = new L.Marker(new L.latLng(loc), {
                title: title
            }); //se property searched
        marker.bindPopup(title);
        markersLayer.addLayer(marker);
    }
</script>
