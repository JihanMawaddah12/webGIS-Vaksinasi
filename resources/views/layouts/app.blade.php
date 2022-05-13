<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @notifyCss
    @notifyJs

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/dt-1.11.4/fh-3.2.1/sc-2.0.5/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/fh-3.2.1/sc-2.0.5/datatables.min.js">
    </script>

    @yield('styles')
</head>

<body>
    <div id="app">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #EDE6DB">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="{{ route('Data user') }}" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href={{ route('Data user') }} class="nav-link">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    @guest
                        @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#drop" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div id="drop" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </li>
            </ul>
        </nav>
        @guest
        @else
            <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed" style="background-color: #417D7A">
                <!-- Brand Logo -->
                <a href="#" class="brand-link" style="text-decoration: none">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/img/logoBNA.png') }}" width="450" alt="">
                        </div>
                        <div class="col-md-7">
                            <span class=" font-weight-light">VAKSINASI<br> COVID-19 <br>BANDA ACEH</span>
                        </div>
                    </div>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="info text-white">
                            {{ Auth::user()->name }}
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">

                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            @if (auth()->user()->level == 'admin')
                                <li class="nav-item">
                                    <a href="{{ route('home') }}"
                                        class="nav-link dropdown-item btn {{ request()->route()->getName() == 'home'? 'text-white bg-info': '' }} text-white text-start">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#maps"
                                        class="nav-link btn bg-transparent text-white text-start w-100"
                                        aria-controls="manajemen" role="button" aria-expanded="true">
                                        <i class="nav-icon fa-solid fa-map"></i>
                                        Maps
                                        <i class="fas fa-sort-down float-end"></i>
                                    </a>

                                    <div class="collapse  {{ in_array(request()->route()->getName(),['maps lokasi', 'maps desa', 'maps', 'Rute'])? 'show': '' }}"
                                        id="maps" style="">
                                        <ul class="nav ms-4 ps-3">
                                            <li class="nav-item w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'maps lokasi'? 'text-white bg-info': '' }}"
                                                    href="{{ route('maps lokasi') }}">Lokasi
                                                    Vaksinasi</a>
                                            </li>
                                            <li class="nav-item  w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'maps desa'? 'text-white bg-info': '' }}"
                                                    href="{{ route('maps desa') }}">Desa</a>
                                            </li>
                                            <li class="nav-item w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'maps'? 'text-white bg-info': '' }}"
                                                    href="{{ route('maps') }}">Kecamatan</a>
                                            </li>
                                            <li class="nav-item w-100 ">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'Rute'? 'text-white bg-info': '' }}"
                                                    href="{{ route('Rute') }}">Rute</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#data"
                                        class="nav-link btn bg-transparent text-white text-start w-100"
                                        aria-controls="manajemen" role="button" aria-expanded="true">
                                        <i class="nav-icon fa-solid fa-database"></i>
                                        Data
                                        <i class="fas fa-sort-down float-end"></i>
                                    </a>

                                    <div class="collapse  {{ in_array(request()->route()->getName(),['halaman data', 'halaman data2', 'halaman desa', 'halaman tematik', 'rumah sakit'])? 'show': '' }}"
                                        id="data" style="">
                                        <ul class="nav ms-4 ps-3">
                                            <li class="nav-item w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'halaman data'? 'text-white bg-info': '' }}"
                                                    href="{{ route('halaman data') }}">
                                                    Data
                                                    Vaksinasi</a>
                                            </li>
                                            <li class="nav-item  w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'halaman data2'? 'text-white bg-info': '' }}"
                                                    href="{{ route('halaman data2') }}">Data
                                                    Lokasi
                                                    Vaksinasi</a>
                                            </li>
                                            <li class="nav-item w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'halaman desa'? 'text-white bg-info': '' }}"
                                                    href="{{ route('halaman desa') }}">Data
                                                    Desa</a>
                                            </li>
                                            <li class="nav-item w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'halaman tematik'? 'text-white bg-info': '' }}"
                                                    href="{{ route('halaman tematik') }}">Data
                                                    Kecamatan</a>
                                            </li>
                                            <li class="nav-item w-100 ">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'rumah sakit'? 'text-white bg-info': '' }}"
                                                    href="{{ route('rumah sakit') }}">Data
                                                    User</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('rs dashboard') }}"
                                        class="nav-link btn {{ request()->route()->getName() == 'rs dashboard'? 'text-white bg-info': '' }}  text-white text-start">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Data Pendaftaran
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('verif') }}"
                                        class="nav-link btn {{ request()->route()->getName() == 'verif'? 'text-white bg-info': '' }}  text-white text-start">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Verifikasi
                                        </p>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a href="{{ route('panduan') }}"
                                    class="nav-link btn bg-transparent text-white text-start w-100">
                                    <i class="nav-icon fa-solid fa-book"></i>
                                    <p>
                                        Panduan
                                    </p>
                                </a>
                            </li>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            @endif
            @guest
                <main class="mt-4">
                @else
                    <main class="content-wrapper mt-4">
                        @endif
                        @yield('content')
                    </main>
            </div>
            <script src="{{ asset('js/app.js') }}"></script>
            @stack('DataTables')
            @stack('scripts')
        </body>

        </html>
