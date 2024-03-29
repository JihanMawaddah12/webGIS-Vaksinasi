@extends('layouts.app')

@section('content')
    <style>
        .pie {

            height: 262px !important;
            width: 524px;

        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <!-- small box -->
                <div class="info-box text-white" style="background-color: #5EAAA8">
                    <span class="info-box-icon">
                        <i class="fa fa-book-medical" style="color:#EDE6DB">
                        </i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text" style="font-size:16px !important">Sasaran Vaksinasi</span>
                        <span class="info-box-number" style="font-size:15px !important">{{ $target }}</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="Progress-description" style="font-size:15px !important">
                            100%
                        </span>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-md-3 col-sm-6 col-12">
                <!-- small box -->
                <div class="info-box text-white" style="background-color: #417D7A">
                    <span class="info-box-icon">
                        <i class="fa fa-syringe" style="color:#EDE6DB"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text" style="font-size:16px !important">Total Vaksinasi Dosis 1</span>
                        <span class="info-box-number" style="font-size:15px !important">{{ $dosis1 }}</span>
                        <div class="progress">
                            <div class="progress-bar"
                                style="width: {{ $dosis1 ? number_format((float) ($dosis1 / $target) * 100, 2, '.', '') : 0 }}%">
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
            <!-- ./col -->
            <div class="col-md-3 col-sm-6 col-12">
                <!-- small box -->
                <div class="info-box text-white" style="background-color: #1D5C63">
                    <span class="info-box-icon">
                        <i class="fa fa-syringe" style="color:#EDE6DB"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text" style="font-size:16px !important">Total Vaksinasi Dosis 2</span>
                        <span class="info-box-number" style="font-size:15px !important">{{ $dosis2 }}</span>
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
            <!-- ./col -->
            <div class="col-md-3 col-sm-6 col-12">
                <!-- small box -->
                <div class="info-box" style="background-color: #1A3C40">
                    <span class="info-box-icon">
                        <i class="fa fa-syringe" style="color:#EDE6DB"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text text-white" style="font-size:16px !important">Total Vaksinasi Dosis
                            3</span>
                        <span class="info-box-number text-white"
                            style="font-size:15px !important">{{ $dosis3 }}</span>
                        <div class="progress">
                            <div class="progress-bar"
                                style="width: {{ $dosis3 ? number_format((float) ($dosis3 / $target) * 100, 2, '.', '') : 0 }}% ">
                            </div>
                        </div>
                        <span class="Progress-description text-white" style="font-size:15px !important">
                            @if ($dosis2)
                                {{ number_format((float) ($dosis3 / $target) * 100, 2, '.', '') }}%
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="mb-2">
            <div class="row">

                <section class="col-md-6 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Grafik
                            </h3>

                            <div class="card-tools mx-2">
                                <form action="{{ route('home') }}" method="get" id="form-graph">
                                    <select class="form-control" id="kecamatan">
                                        <option disabled selected value="">--Pilih Kecamatan--</option>
                                        @foreach ($tematik as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $state == $item->id ? 'selected' : '' }}>
                                                {{ $item->kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body" style="background-color: #D4ECDD">
                            @if ($state)
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" onclick="return state = 'grafik1'"
                                                href="#grafik1-button" data-bs-toggle="tab">Dosis
                                                1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="return state = 'grafik2'" href="#grafik2-button"
                                                data-bs-toggle="tab">Dosis
                                                2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="return state = 'grafik3'" href="#grafik3-button"
                                                data-bs-toggle="tab">Dosis
                                                3</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content p-0">
                                    <!-- Morris chart - Sales -->
                                    <div class="chart tab-pane active" id="grafik1-button"
                                        style="position: relative; height: 350px;">
                                        <canvas id="grafik1" height="300" style="height: 300px;"></canvas>
                                    </div>
                                    <div class="chart tab-pane" id="grafik2-button"
                                        style="position: relative; height: 350px;">
                                        <canvas id="grafik2" height="300" style="height: 300px;"></canvas>
                                    </div>
                                    <div class="chart tab-pane" id="grafik3-button"
                                        style="position: relative; height: 350px;">
                                        <canvas id="grafik3" height="300" style="height: 300px;"></canvas>
                                    </div>
                                </div>
                            @endif
                        </div><!-- /.card-body -->
                    </div>
                </section>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #D4ECDD">
                            <h3 class="card-title">Capaian Kelompok</h3>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-10">
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
                </div>
            </div>
        </div>

        <div class="row">
            <section class="col-md-6">
                <div class="card" style="background-color: #D4ECDD">
                    <div class="card-header border-0">
                        <h3 class="card-title">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Capaian Kecamatan
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="map" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
            </section>

            <section class="col-md-6">
                <div class="card" style="background-color: #D4ECDD">
                    <div class="card-header border-0">
                        <h3 class="card-title">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Capaian Desa
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="map_desa" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
            </section>
            <div class="row">
            </div>
        @endsection

        @section('styles')
            <!-- Leaflet CSS -->
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
                integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
                crossorigin="" />
            <style>
                .leaflet-control-attribution {
                    display: none !important
                }

                .info {
                    padding: 6px 8px;
                    font: 14px/16px Arial, Helvetica, sans-serif;
                    background: #EDE6DB;
                    background: #EDE6DB;
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                    border-radius: 5px;
                }

                .info h5 {
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
            </style>
        @endsection

        @push('scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
                integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                $('#kecamatan').change(function() {
                    window.location.href = '/home/' + this.value;
                });
            </script>
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
                var labelPie = ['Tenaga Kesehatan', 'Petugas Publik', 'Lansia', 'Masyarakat Umum', 'Remaja', 'Usia 6-11 Tahun'];
                const dataPie = {
                    labels: labelPie,
                    datasets: [{
                        label: 'Dosis 1 ',
                        backgroundColor: [
                            '#7D1E6A',
                            '#243A73',
                            '#CC7351',
                            '#056676',
                            '#555555',
                            '#EEBB4D'
                        ],
                        borderColor: '#000000',
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
                var labelPie2 = ['Tenaga Kesehatan', 'Petugas Publik', 'Lansia', 'Masyarakat Umum', 'Remaja', 'Usia 6-11 Tahun'];
                const dataPie2 = {
                    labels: labelPie2,
                    datasets: [{
                        label: 'Dosis 2 ',
                        backgroundColor: [
                            '#7D1E6A',
                            '#243A73',
                            '#CC7351',
                            '#056676',
                            '#555555',
                            '#EEBB4D'
                        ],
                        borderColor: '#000000',
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
                var labelPie3 = ['Tenaga Kesehatan', 'Petugas Publik', 'Lansia', 'Masyarakat Umum', 'Remaja', 'Usia 6-11 Tahun'];
                const dataPie3 = {
                    labels: labelPie3,
                    datasets: [{
                        label: 'Dosis 3 ',
                        backgroundColor: [
                            '#7D1E6A',
                            '#243A73',
                            '#CC7351',
                            '#056676',
                            '#555555',
                            '#EEBB4D'
                        ],
                        borderColor: '#000000',
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
                var tematik = {!! json_encode($kecamatan) !!}
                var jumlah = {!! json_encode($jumlah_kecamatan) !!}
                var target = {!! json_encode($jmlh_target) !!}
                var map = L.map('map').setView(
                    s, 13
                );
                var dosis_label = '1';


                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                function style(feature) {
                    warna = "";
                    if ((jumlah[dosis_label][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 >= 0 && (jumlah[
                            dosis_label][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 <= 39) {
                        warna = 'red';
                    } else if ((jumlah[dosis_label][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 >= 40 && (
                            jumlah[dosis_label][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 <= 69) {
                        warna = 'yellow';
                    } else if ((jumlah[dosis_label][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 >= 70) {
                        warna = 'green';
                    }
                    return {
                        weight: 2,
                        opacity: 1,
                        color: 'white',
                        dashArray: '3',
                        fillOpacity: 0.5,
                        fillColor: warna
                    };
                }

                var geojson;

                function updatePopup(evt) {
                    geojsonLayer.setStyle({
                        fillColor: 'transparent'
                    });
                    var propertyValue;
                    var feature = evt.target.feature;
                    var props = feature.properties;
                    warna = "";
                    if ((jumlah[dosis_label][props.NAMOBJ] / target[props.NAMOBJ]) * 100 >= 0 && (jumlah[dosis_label][props
                            .NAMOBJ
                        ] / target[
                            props.NAMOBJ]) * 100 <= 39) {
                        warna = 'red';
                    } else if ((jumlah[dosis_label][props.NAMOBJ] / target[props.NAMOBJ]) * 100 >= 40 && (jumlah[dosis_label][props
                                .NAMOBJ
                            ] /
                            target[props.NAMOBJ]) * 100 <= 69) {
                        warna = 'yellow';
                    } else if ((jumlah[dosis_label][props.NAMOBJ] / target[props.NAMOBJ]) * 100 >= 70) {
                        warna = 'green';
                    }
                    evt.target.setStyle({
                        fillColor: warna
                    })
                    evt.popup.setContent('<h4>Kecamatan</h4> ' + (props ?
                        '<b>' + props.NAMOBJ + '</b><br /> Jumlah Vaksin <br/> Dosis 1: ' + jumlah['1'][props.NAMOBJ] +
                        ' orang (' +
                        ((jumlah['1'][props.NAMOBJ] / target[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' +
                        'Dosis 2: ' + jumlah['2'][props.NAMOBJ] + ' orang (' +
                        ((jumlah['2'][props.NAMOBJ] / target[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' +
                        'Dosis 3: ' + jumlah['3'][props.NAMOBJ] + ' orang (' +
                        ((jumlah['3'][props.NAMOBJ] / target[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' : ""));
                }

                function zoomToFeature(e) {
                    console.log(e)
                    map.fitBounds(e.target.getBounds());
                }

                function onEachFeature(feature, layer) {
                    if (feature.properties) {
                        layer.bindPopup('', {
                            maxHeight: 200
                        }), layer.bindTooltip(feature.properties.NAMOBJ, {
                            permanent: true,
                            direction: 'center',
                            className: 'bg-transparent border-0 text-black shadow-none font-weight-bold'
                        });

                        layer.on('popupopen', updatePopup);
                    }

                    layer.on({
                        "click": zoomToFeature
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
                legend.onAdd = function(map) {
                    var div = L.DomUtil.create('div', 'info legend')
                    var labels = ''
                    for (var i = 0; i < tematik.length; i++) {
                        warna = "";
                        if ((jumlah[dosis_label][tematik[i]] / target[tematik[i]]) * 100 >= 0 && (jumlah[dosis_label][tematik[
                                i]] / target[
                                tematik[i]]) * 100 <= 34.99) {
                            warna = 'red';
                        } else if ((jumlah[dosis_label][tematik[i]] / target[tematik[i]]) * 100 >= 35 && (jumlah[dosis_label][
                                    tematik[i]
                                ] /
                                target[tematik[i]]) * 100 <= 69.99) {
                            warna = 'yellow';
                        } else if ((jumlah[dosis_label][tematik[i]] / target[tematik[i]]) * 100 >= 70) {
                            warna = 'green';
                        }
                        geojsonLayer.eachLayer(function(layer) {
                            if (layer.feature.properties.NAMOBJ == tematik[i]) {

                                layer.setStyle({
                                    fillColor: warna
                                })
                            }
                        });
                    }
                    labels =
                        ' Persentase Capaian </br></br>' +
                        '<i style="background:red"></i> - 0% - 34% </br></br>' +
                        '<i style="background:yellow"></i> - 35% - 69% </br></br> ' +
                        '<i style="background:green"></i> - 70% - 100% </br></br>';
                    div.innerHTML =
                        '<div class="row mb-2">' +
                        '<div class="col">' +
                        '<button class="btn btn-info text-white" id="dosis1_label" onclick="dosis_label = \'1\';legend.addTo(map);update()">Dosis 1<button>' +
                        '</div>' +
                        '<div class="col">' +
                        '<button class="btn btn-info text-white" id="dosis2_label" onclick="dosis_label = \'2\';legend.addTo(map);update()">Dosis 2</button>' +
                        '</div>' +
                        '<div class="col">' +
                        '<button class="btn btn-info text-white" id="dosis3_label" onclick="dosis_label = \'3\';legend.addTo(map);update()">Dosis 3</button>' +
                        '</div>' +
                        '</div> <br>' + labels;
                    return div;

                };

                function update() {
                    if (dosis_label == '1') {
                        document.getElementById('dosis1_label').style.backgroundColor = 'lightGreen'
                        document.getElementById('dosis2_label').style.backgroundColor = '#0dcaf0'
                        document.getElementById('dosis3_label').style.backgroundColor = '#0dcaf0'
                    } else if (dosis_label == '2') {
                        document.getElementById('dosis1_label').style.backgroundColor = '#0dcaf0'
                        document.getElementById('dosis2_label').style.backgroundColor = 'lightGreen'
                        document.getElementById('dosis3_label').style.backgroundColor = '#0dcaf0'
                    } else if (dosis_label == '3') {
                        document.getElementById('dosis1_label').style.backgroundColor = '#0dcaf0'
                        document.getElementById('dosis2_label').style.backgroundColor = '#0dcaf0'
                        document.getElementById('dosis3_label').style.backgroundColor = 'lightGreen'
                    }
                }
                legend.addTo(map);
                var controlSearch = new L.Control.Search({
                    position: 'topleft',
                    layer: geojsonLayer,
                    initial: false,
                    zoom: 12,
                    marker: false,
                    propertyName: 'NAMOBJ',
                    autoType: false,
                    marker: {
                        icon: false
                    }

                });
                map.addControl(controlSearch);
            </script>
            <script>
                var s_desa = [5.554630942893766, 95.31709742351293];
                var color_desa = {!! json_encode($color_desa) !!};
                var data_desa = {!! json_encode($data_desa) !!}
                var tematik_desa = {!! json_encode($tematik_desa) !!}
                var jumlah_desa = {!! json_encode($jumlah_desa) !!}
                var target_desa = {!! json_encode($jmlh_target_desa) !!}
                var dosis_desa = '1'
                var map_desa = L.map('map_desa').setView(
                    s, 14
                );

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map_desa);


                function style_desa(feature) {
                    warna = "";
                    if ((jumlah_desa[dosis_desa][feature.properties.NAMOBJ] / target_desa[feature.properties.NAMOBJ]) * 100 >= 0 &&
                        (jumlah_desa[dosis_desa][
                            feature.properties.NAMOBJ
                        ] / target_desa[feature.properties.NAMOBJ]) * 100 <= 34.99) {
                        warna = 'red';
                    } else if ((jumlah_desa[dosis_desa][feature.properties.NAMOBJ] / target_desa[feature.properties.NAMOBJ]) *
                        100 >= 35 && (
                            jumlah_desa[dosis_desa][feature.properties.NAMOBJ] / target_desa[feature.properties.NAMOBJ]) * 100 <=
                        69.99
                    ) {
                        warna = 'yellow';
                    } else if ((jumlah_desa[dosis_desa][feature.properties.NAMOBJ] / target_desa[feature.properties.NAMOBJ]) *
                        100 >= 70) {
                        warna = 'green';
                    }
                    return {
                        weight: 2,
                        opacity: 1,
                        color: 'white',
                        dashArray: '3',
                        fillOpacity: 0.5,
                        fillColor: warna
                    };
                }
                var geojson_desa;

                function zoomToFeature(e) {
                    map_desa.fitBounds(e.target.getBounds());
                }

                function updatePopup_desa(evt) {
                    geojsonLayer_desa.setStyle({
                        fillColor: 'transparent'
                    });

                    var propertyValue;
                    var feature = evt.target.feature;
                    var props = feature.properties;
                    warna = "";
                    if ((jumlah_desa[dosis_desa][props.NAMOBJ] / target_desa[props.NAMOBJ]) * 100 >= 0 && (jumlah_desa[dosis_desa][
                            props.NAMOBJ
                        ] / target_desa[
                            props.NAMOBJ]) * 100 <= 34.99) {
                        warna = 'red';
                    } else if ((jumlah_desa[dosis_desa][props.NAMOBJ] / target_desa[props.NAMOBJ]) * 100 >= 35 && (jumlah_desa[
                                dosis_desa][props.NAMOBJ] /
                            target_desa[props.NAMOBJ]) * 100 <= 69.99) {
                        warna = 'yellow';
                    } else if ((jumlah_desa[dosis_desa][props.NAMOBJ] / target_desa[props.NAMOBJ]) * 100 >= 70) {
                        warna = 'green';
                    }
                    evt.target.setStyle({
                        fillColor: warna
                    })
                    evt.popup.setContent('<h4>Desa</h4>' + (props ?
                        '<b>' + props.NAMOBJ + '</b><br /> Jumlah Vaksin <br/> Dosis 1: ' + jumlah_desa['1'][props.NAMOBJ] +
                        ' orang (' +
                        ((jumlah_desa['1'][props.NAMOBJ] / target_desa[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' +
                        'Dosis 2: ' + jumlah_desa['2'][props.NAMOBJ] + ' orang (' +
                        ((jumlah_desa['2'][props.NAMOBJ] / target_desa[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' +
                        'Dosis 3: ' + jumlah_desa['3'][props.NAMOBJ] + ' orang (' +
                        ((jumlah_desa['3'][props.NAMOBJ] / target_desa[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' : ""));
                }

                function zoomToFeature(e) {
                    console.log(e)
                    map_desa.fitBounds(e.target.getBounds());
                }

                function onEachFeature(feature, layer) {
                    if (feature.properties) {
                        layer.bindPopup('', {
                            maxHeight: 200
                        }), layer.bindTooltip(feature.properties.NAMOBJ, {
                            permanent: true,
                            direction: 'center',
                            className: 'bg-transparent border-0 text-black shadow-none font-weight-bold'
                        });
                        layer.on('popupopen', updatePopup_desa);
                    }

                    layer.on({

                        "click": zoomToFeature
                    });
                }
                var geojsonLayer_desa = new L.GeoJSON.AJAX({!! json_encode($geofile_desa) !!}, {
                    style: style_desa,
                    onEachFeature: onEachFeature
                });
                map_desa.addLayer(geojsonLayer_desa);

                var legend_desa = L.control({
                    position: 'bottomright'
                });

                var dosis_desa = '1';
                legend_desa.onAdd = function(map) {
                    var div = L.DomUtil.create('div', 'info legend')
                    var labels = ''
                    for (var i = 0; i < tematik_desa.length; i++) {
                        warna = "";
                        if ((jumlah_desa[dosis_desa][tematik_desa[i]] / target_desa[tematik_desa[i]]) * 100 >= 0 && (
                                jumlah_desa[dosis_desa][tematik_desa[i]] / target_desa[
                                    tematik_desa[i]]) * 100 <= 34.99) {
                            warna = 'red';
                        } else if ((jumlah_desa[dosis_desa][tematik_desa[i]] / target_desa[tematik_desa[i]]) * 100 >= 35 && (
                                jumlah_desa[dosis_desa][tematik_desa[i]] /
                                target_desa[tematik_desa[i]]) * 100 <= 69.99) {
                            warna = 'yellow';
                        } else if ((jumlah_desa[dosis_desa][tematik_desa[i]] / target_desa[tematik_desa[i]]) * 100 >= 70) {
                            warna = 'green';
                        }
                        geojsonLayer_desa.eachLayer(function(layer) {
                            if (layer.feature.properties.NAMOBJ == tematik_desa[i]) {
                                layer.setStyle({
                                    fillColor: warna
                                })
                            }
                        });
                    }
                    labels =
                        ' Persentase Capaian </br></br>' +
                        '<i style="background:red"></i> - 0% - 34% </br></br>' +
                        '<i style="background:yellow"></i> - 35% - 69% </br></br> ' +
                        '<i style="background:green"></i> - 70% - 100% </br></br>';
                    div.innerHTML =
                        '<div class="row mb-2">' +
                        '<div class="col">' +
                        '<button class="btn btn-info text-white" id="dosis1_desa" onclick="dosis_desa = \'1\';legend_desa.addTo(map_desa);update()">Dosis 1<button>' +
                        '</div>' +
                        '<div class="col">' +
                        '<button class="btn btn-info text-white" id="dosis2_desa" onclick="dosis_desa = \'2\';legend_desa.addTo(map_desa);update()">Dosis 2</button>' +
                        '</div>' +
                        '<div class="col">' +
                        '<button class="btn btn-info text-white" id="dosis3_desa" onclick="dosis_desa = \'3\';legend_desa.addTo(map_desa);update()">Dosis 3</button>' +
                        '</div>' +
                        '</div> <br>' + labels;
                    return div;

                };

                function update() {
                    if (dosis_desa == '1') {
                        document.getElementById('dosis1_desa').style.backgroundColor = '#4FBDBA'
                        document.getElementById('dosis2_desa').style.backgroundColor = '#35858B'
                        document.getElementById('dosis3_desa').style.backgroundColor = '#35858B'
                    } else if (dosis_desa == '2') {
                        document.getElementById('dosis1_desa').style.backgroundColor = '#35858B'
                        document.getElementById('dosis2_desa').style.backgroundColor = '#4FBDBA'
                        document.getElementById('dosis3_desa').style.backgroundColor = '#35858B'
                    } else if (dosis_desa == '3') {
                        document.getElementById('dosis1_desa').style.backgroundColor = '#35858B'
                        document.getElementById('dosis2_desa').style.backgroundColor = '#35858B'
                        document.getElementById('dosis3_desa').style.backgroundColor = '#4FBDBA'
                    }
                }
                legend_desa.addTo(map_desa);
                var controlSearch_desa = new L.Control.Search({
                    position: 'topleft',
                    layer: geojsonLayer_desa,
                    initial: false,
                    zoom: 12,
                    marker: false,
                    propertyName: 'NAMOBJ',
                    autoType: false,
                    marker: {
                        icon: false
                    }

                });


                map_desa.addControl(controlSearch_desa);
            </script>
        @endpush
