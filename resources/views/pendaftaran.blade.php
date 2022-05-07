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
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
        integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.heat/0.2.0/leaflet-heat.js"></script>

    <script src="{{ asset('storage/js/leaflet-routing-machine/dist/leaflet-routing-machine.min.js') }}">
    </script>

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
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

    <section class="w-100" style="background-color: #4F8A8B">
        <a href="{{ route('login') }}" class="text-decoration-none text-white m-4 py-1 btn btn-outline-light me-2">
            <h4>Log in</h4>
        </a>
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Home</h4>
        </a>
        <a href="{{ route('RuteUser') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Rute</h4>
        </a>
        <a href="{{ route('panduanUser') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Panduan</h4>
        </a>
        <a href="{{ route('pendaftaran') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn"
            style="border-bottom:1px solid white;">
            <h4>Daftar Vaksinasi</h4>
        </a>
    </section>

    <section class="second-section">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3">
                        <form action="{{ route('daftar') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="rm">Lokasi Vaksinasi</label>
                                <input type="text" id="rm" class="form-control" required disabled>
                                <input type="hidden" id="rm_id" name="halaman_data2_id" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Nama lengkap</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>NIK Anda</label>
                                <input type="text" class="form-control" name="nik" required>
                            </div>
                            <div class="form-group mt-3">
                                <div class="row mx-auto">
                                    <div class="col-md-4">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lk">Laki-laki</label>
                                        <input type="radio" name="jk" id="lk" value="Laki-laki" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pr">Perempuan</label>
                                        <input type="radio" name="jk" id="pr" value="Perempuan" required>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group my-3">
                                <label>Alamat Lengkap Sesuai KTP</label>
                                <input type="text" class="form-control" name="alamat" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group my-3">
                                        <select name="tematik_id" id="" class="form-control">
                                            <option value="">--Pilih Kecamatan--</option>
                                            @foreach ($kecamatan as $item)
                                                <option value="{{ $item->id }}">{{ $item->kecamatan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group my-3">
                                        <select name="desa_id" id="" class="form-control">
                                            <option value="">--Pilih Desa--</option>
                                            @foreach ($desa as $item)
                                                <option value="{{ $item->id }}">{{ $item->desa }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label>No HP aktif</label>
                                <input type="text" class="form-control" name="no_hp" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group my-3">
                                        <label>Dosis</label>
                                        <select name="dosis" id="" class="form-control">
                                            <option value="">--Pilih Dosis--</option>
                                            <option value="Dosis 1">Dosis 1</option>
                                            <option value="Dosis 2">Dosis 2</option>
                                            <option value="Dosis 3">Dosis 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group my-3">
                                        <label>Kelompok</label>
                                        <select name="kelompok" id="" class="form-control">
                                            <option value="">--Pilih Kelompok--</option>
                                            <option value="nakes">nakes</option>
                                            <option value="petugas publik">petugas publik</option>
                                            <option value="lansia">lansia</option>
                                            <option value="masyarakat umum">masyarakat umum</option>
                                            <option value="remaja">remaja</option>
                                            <option value="usia 6-11 tahun">usia 6-11 tahun</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    Data telah terdaftar
                                </div>
                            @endif
                            <button class="float-end btn btn-success" type="submit">Daftar</button>
                        </form>
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
                        <li><a href="https://web.facebook.com/profile.php?id=100066531401790"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://dinkes.bandaacehkota.go.id/"><i class="fa fa-globe"></i></a></li>
                    </ul>
                    <p class="text-white">Dinas Kesehatan Kota Banda Aceh | 2022
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
    <script type="text/javascript">
        var s = [5.554630942893766, 95.31709742351293];
        var data = {!! json_encode($data) !!}
        var map = L.map('map').setView(
            s, 11
        );
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);
        var info = L.control();
        info.onAdd = function(map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };
        //menampilkan pop up info tematik
        info.update = function(props) {
            this._div.innerHTML = '<h4>Kecamatan</h4>' + (props ?
                '<b>' + props.NAMOBJ + '</b><br />' + props.MhsSIF + ' orang' :
                'Gerakkan mouse Anda');
        };
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
        var icon = L.icon({
            iconUrl: "{{ asset('storage/img/hospital.png') }}",
            iconSize: [38, 38], // size of the icon

        });
        var userMarker = new L.marker();
        for (var i = 0; i < data.length; i++) {
            marker = new L.marker([data[i][1], data[i][2]], {
                    icon: icon
                })
                .bindPopup("<strong> <div class='text-center'><strong>" + data[i][3] +
                    "</strong><br/> <div class='text-center'><strong>Kapasitas " + data[i][5] +
                    "</strong><br/> <div class='text-center'><strong>Deskripsi " + data[i][6] +
                    "</strong></div><button class='w-100 btn btn-outline-primary mt-1' onclick='return keSini(&quot;" +
                    data[i][4] + "&quot;,&quot;" + data[i][3] + "&quot;)'>Ke Sini</button>")
                .addTo(map);
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
        var latPoint = "";
        var longPoint = "";

        function updateMarker(lat, lng) {
            latPoint = lat;
            longPoint = lng;
            userMarker
                .setLatLng([lat, lng]);
            return false;
        };
        // var dataPoint = [];
        // for (var i = 0; i < data.length; i++) {
        //     dataPoint[i] = L.latLng(data[i][1], data[i][2]);
        // }
        var control = L.Routing.control({
            waypoints: [],
            routeWhileDragging: true,
        });
        control.addTo(map);

        function keSini(id, rm) {
            document.getElementById('rm').value = rm;
            document.getElementById('rm_id').value = id;
        }

        map.on('click', function(e) {
            let latitude = e.latlng.lat.toString().substring(0, 15);
            let longitude = e.latlng.lng.toString().substring(0, 15);
            control.setWaypoints(L.latLng(latitude, longitude))
            $('#latitude').val(latitude);
            $('#longitude').val(longitude);
            updateMarker(latitude, longitude);

        });
    </script>
</body>

</html>
