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
    <title>Ziggy HTML Template</title>
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
</head>

<body>


    <section class="w-100" style="background-color: #2B333F">
        <a href="{{ route('login') }}" class="text-decoration-none text-white m-4 py-1 btn btn-outline-info me-2">
            <h4>Log in</h4>
        </a>
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn"
            style="border-bottom:1px solid cyan;">
            <h4>Home</h4>
        </a>
        <a href="{{ route('Rute') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Rute</h4>
        </a>
        <a href="#" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Panduan</h4>
        </a>
        <a href="{{ route('pendaftaran') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Pendaftaran</h4>
        </a>
    </section>

    <section class="second-section">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="card p-3 mb-3 bg-info">
                        <div class="inner">
                            <h3 class="text-white">{{ $target }}</h3>

                            <p class="text-white">Target</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="card p-3 mb-3 bg-success">
                        <div class="inner">
                            <h3 class="text-white">{{ $dosis1 }}</h3>

                            <p class="text-white">Dosis 1</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="card p-3 mb-3 bg-warning">
                        <div class="inner">
                            <h3 class="text-white">{{ $dosis2 }}</h3>

                            <p class="text-white">Dosis 2</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="card p-3 mb-3 bg-danger">
                        <div class="inner">
                            <h3 class="text-white">{{ $dosis3 }}</h3>

                            <p class="text-white">Dosis 3</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Grafik
                    </h3>
                    <div class="card-tools">
                        <form action="{{ route('home') }}" method="get" id="form-graph">
                            <select class="form-control" id="kecamatan">
                                <option disabled selected value="">--Pilih Kecamatan--</option>
                                @foreach ($tematik as $item)
                                    <option value="{{ $item->id }}" {{ $state == $item->id ? 'selected' : '' }}>
                                        {{ $item->kecamatan }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    @if ($state)
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#grafik1-button" data-bs-toggle="tab">Dosis
                                        1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#grafik2-button" data-bs-toggle="tab">Dosis
                                        2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#grafik3-button" data-bs-toggle="tab">Dosis
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
                            <div class="chart tab-pane" id="grafik2-button" style="position: relative; height: 300px;">
                                <canvas id="grafik2" height="300" style="height: 300px;"></canvas>
                            </div>
                            <div class="chart tab-pane" id="grafik3-button" style="position: relative; height: 300px;">
                                <canvas id="grafik3" height="300" style="height: 300px;"></canvas>
                            </div>
                        </div>
                    @endif
                </div><!-- /.card-body -->
            </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="https://www.facebook.com/tooplate"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <p class="text-white">Copyright &copy; 2017 Company Name

                        | Design: <a href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script>
        $('#kecamatan').change(function() {
            window.location.href = '/data-user/' + this.value;
        });
    </script>
</body>

</html>
