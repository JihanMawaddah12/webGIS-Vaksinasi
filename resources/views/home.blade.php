@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $target }}</h3>

                        <p>Sasaran Vaksinasi</p>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <div class="row">
                            <div class="col">
                                <h3>{{ $dosis1 }}</h3>
                            </div>
                            <div class="col">
                                <h3 class="text-end">
                                    {{ number_format((float) ($dosis1 / $target) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                        </div>
                        <p>Total Vaksinasi Dosis 1</p>

                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <div class="row">
                            <div class="col">
                                <h3>{{ $dosis2 }}</h3>
                            </div>
                            <div class="col">
                                <h3 class="text-end">
                                    {{ number_format((float) ($dosis2 / $target) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                        </div>
                        <p>Total Vaksinasi Dosis 2</p>

                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <div class="row">
                            <div class="col">
                                <h3>{{ $dosis3 }}</h3>
                            </div>
                            <div class="col">
                                <h3 class="text-end">
                                    {{ number_format((float) ($dosis3 / $target) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                        </div>
                        <p>Total Vaksinasi Dosis 3</p>

                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <h4>Dosis terendah</h4>
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>Dosis 1</h4>
                        <h6>Kecamatan {{ $krendah1->tematik->kecamatan }}</h6>
                        <h6>Jumlah {{ $krendah1->total }}</h6>
                        <h3>
                            {{ $krpersen1 ? number_format((float) ($krendah1->total / $krpersen1) * 100, 2, '.', '') : 0 }}%
                            </h6>
                            <hr class="text-white bg-white" />
                            <h4>Dosis 2</h4>
                            <h6>Kecamatan {{ $krendah2->tematik->kecamatan }}</h6>
                            <h6>Jumlah {{ $krendah2->total }}</h6>
                            <h3>
                                {{ $krpersen2 ? number_format((float) ($krendah2->total / $krpersen2) * 100, 2, '.', '') : 0 }}%
                                </h6>
                                <hr class="text-white bg-white" />
                                <h4>Dosis 3</h4>
                                <h6>Kecamatan {{ $krendah3->tematik->kecamatan }}</h6>
                                <h6>Jumlah {{ $krendah3->total }}</h6>
                                <h3>
                                    {{ $krpersen3 ? number_format((float) ($krendah3->total / $krpersen3) * 100, 2, '.', '') : 0 }}%
                                    </h6>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <h4>Dosis tertinggi</h4>
                <div class="small-box text-white" style="background-color:rgb(99, 70, 227)">
                    <div class="inner">
                        <h4>Dosis 1</h4>
                        <h6>Kecamatan {{ $ktinggi1->tematik->kecamatan }}</h6>
                        <h6>Jumlah {{ $ktinggi1->total }}</h6>
                        <h3>
                            {{ $ktpersen1 ? number_format((float) ($ktinggi1->total / $ktpersen1) * 100, 2, '.', '') : 0 }}%
                        </h3>
                        <hr class="text-white bg-white" />
                        <h4>Dosis 2</h4>
                        <h6>Kecamatan {{ $ktinggi2->tematik->kecamatan }}</h6>
                        <h6>Jumlah {{ $ktinggi2->total }}</h6>
                        <h3>
                            {{ $ktpersen2 ? number_format((float) ($ktinggi2->total / $ktpersen2) * 100, 2, '.', '') : 0 }}%
                        </h3>
                        <hr class="text-white bg-white" />
                        <h4>Dosis 3</h4>
                        <h6>Kecamatan {{ $ktinggi3->tematik->kecamatan }}</h6>
                        <h6>Jumlah {{ $ktinggi3->total }}</h6>
                        <h3>
                            {{ $ktpersen3 ? number_format((float) ($ktinggi3->total / $ktpersen3) * 100, 2, '.', '') : 0 }}%
                        </h3>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <h4>Dosis desa terendah</h4>
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>Dosis 1</h4>
                        <h6>Desa {{ $drendah1->desa->desa }}</h6>
                        <h6>Jumlah {{ $drendah1->total }}</h6>
                        <h3>
                            {{ $drpersen1 ? number_format((float) ($drendah1->total / $drpersen1) * 100, 2, '.', '') : 0 }}%
                            </h6>
                            <hr class="text-white bg-white" />
                            <h4>Dosis 2</h4>
                            <h6>Desa {{ $drendah2->desa->desa }}</h6>
                            <h6>Jumlah {{ $drendah2->total }}</h6>
                            <h3>
                                {{ $drpersen2 ? number_format((float) ($drendah2->total / $drpersen2) * 100, 2, '.', '') : 0 }}%
                                </h6>
                                <hr class="text-white bg-white" />
                                <h4>Dosis 3</h4>
                                <h6>Desa {{ $drendah3->desa->desa }}</h6>
                                <h6>Jumlah {{ $drendah3->total }}</h6>
                                <h3>
                                    {{ $drpersen3 ? number_format((float) ($drendah3->total / $drpersen3) * 100, 2, '.', '') : 0 }}%
                                    </h6>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <h4>Dosis desa tertinggi</h4>
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4>Dosis 1</h4>
                        <h6>Desa {{ $dtinggi1->desa->desa }}</h6>
                        <h6>Jumlah {{ $dtinggi1->total }}</h6>
                        <h3>
                            {{ $dtpersen1 ? number_format((float) ($dtinggi1->total / $dtpersen1) * 100, 2, '.', '') : 0 }}%
                            </h6>
                            <hr class="text-white bg-white" />
                            <h4>Dosis 2</h4>
                            <h6>Desa {{ $dtinggi2->desa->desa }}</h6>
                            <h6>Jumlah {{ $dtinggi2->total }}</h6>
                            <h3>
                                {{ $dtpersen2 ? number_format((float) ($dtinggi2->total / $dtpersen2) * 100, 2, '.', '') : 0 }}%
                                </h6>
                                <hr class="text-white bg-white" />
                                <h4>Dosis 3</h4>
                                <h6>Desa {{ $dtinggi3->desa->desa }}</h6>
                                <h6>Jumlah {{ $dtinggi3->total }}</h6>
                                <h3>
                                    {{ $dtpersen3 ? number_format((float) ($dtinggi3->total / $dtpersen3) * 100, 2, '.', '') : 0 }}%
                                    </h6>
                    </div>
                </div>
            </div>


            <!-- ./col -->
        </div>
        <div class="mb-2">
            <h4>Nakes</h4>
            <div class="p-4 w-100 rounded shadow bg-info">
                <div class="inner">
                    <div class="row">
                        <div class="col">
                            <h4>Dosis 1</h4>
                            <h6>Jumlah {{ $dosis1_nakes }}</h6>
                            <h3>
                                {{ number_format((float) ($dosis1_nakes / $target_nakes) * 100, 2, '.', '') }}%
                                </h6>
                        </div>
                        <div class="col">
                            <h4>Dosis 2</h4>

                            <h6>Jumlah {{ $dosis2_nakes }}</h6>
                            <h3>
                                {{ number_format((float) ($dosis2_nakes / $target_nakes) * 100, 2, '.', '') }}%
                                </h6>
                        </div>
                        <div class="col">
                            <h4>Dosis 3</h4>
                            <h6>Jumlah {{ $dosis3_nakes }}</h6>
                            <h3>
                                {{ number_format((float) ($dosis3_nakes / $target_nakes) * 100, 2, '.', '') }}%
                                </h6>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mb-2">
                <h4>Petugas Publik</h4>
                <div class="p-4 w-100 rounded shadow bg-info">
                    <div class="inner">
                        <div class="row">
                            <div class="col">
                                <h4>Dosis 1</h4>
                                <h6>Jumlah {{ $dosis1_petugas }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis1_petugas / $target_petugas) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 2</h4>

                                <h6>Jumlah {{ $dosis2_petugas }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis2_petugas / $target_petugas) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 3</h4>
                                <h6>Jumlah {{ $dosis3_petugas }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis3_petugas / $target_petugas) * 100, 2, '.', '') }}%
                                    </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <h4>Lansia</h4>
                <div class="p-4 w-100 rounded shadow bg-info">
                    <div class="inner">
                        <div class="row">
                            <div class="col">
                                <h4>Dosis 1</h4>
                                <h6>Jumlah {{ $dosis1_lansia }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis1_lansia / $target_lansia) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 2</h4>

                                <h6>Jumlah {{ $dosis2_lansia }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis2_lansia / $target_lansia) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 3</h4>
                                <h6>Jumlah {{ $dosis3_lansia }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis3_lansia / $target_lansia) * 100, 2, '.', '') }}%
                                    </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <h4>Masyarakat</h4>
                <div class="p-4 w-100 rounded shadow bg-info">
                    <div class="inner">
                        <div class="row">
                            <div class="col">
                                <h4>Dosis 1</h4>
                                <h6>Jumlah {{ $dosis1_masyarakat }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis1_masyarakat / $target_masyarakat) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 2</h4>

                                <h6>Jumlah {{ $dosis2_masyarakat }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis2_masyarakat / $target_masyarakat) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 3</h4>
                                <h6>Jumlah {{ $dosis3_masyarakat }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis3_masyarakat / $target_masyarakat) * 100, 2, '.', '') }}%
                                    </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <h4>Remaja</h4>
                <div class="p-4 w-100 rounded shadow bg-info">
                    <div class="inner">
                        <div class="row">
                            <div class="col">
                                <h4>Dosis 1</h4>
                                <h6>Jumlah {{ $dosis1_remaja }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis1_remaja / $target_remaja) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 2</h4>

                                <h6>Jumlah {{ $dosis2_remaja }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis2_remaja / $target_remaja) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 3</h4>
                                <h6>Jumlah {{ $dosis3_remaja }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis3_remaja / $target_remaja) * 100, 2, '.', '') }}%
                                    </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <h4>Usia 6-11 tahun</h4>
                <div class="p-4 w-100 rounded shadow bg-info">
                    <div class="inner">
                        <div class="row">
                            <div class="col">
                                <h4>Dosis 1</h4>
                                <h6>Jumlah {{ $dosis1_usia }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis1_usia / $target_usia) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 2</h4>

                                <h6>Jumlah {{ $dosis2_usia }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis2_usia / $target_usia) * 100, 2, '.', '') }}%
                                </h3>
                            </div>
                            <div class="col">
                                <h4>Dosis 3</h4>
                                <h6>Jumlah {{ $dosis3_usia }}</h6>
                                <h3>
                                    {{ number_format((float) ($dosis3_usia / $target_usia) * 100, 2, '.', '') }}%
                                    </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <section class="col-lg-7 connectedSortable">
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
                        <div class="card-body">
                            @if ($state)
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
                            @endif
                        </div><!-- /.card-body -->
                    </div>
                </section>
                <section class="col-lg-5 ">
                    <div class="card bg-gradient-primary">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                Maps
                            </h3>

                        </div>
                        <div class="card-body">
                            <div id="map" style="height: 300px; width: 100%;"></div>
                        </div>

                    </div>
                </section>

            </div>
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
            var labels = {!! json_encode($kec) !!};
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Dosis 1',
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
                    label: 'Dosis 2',
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
                    label: 'Dosis 3',
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
                crossorigin="">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
                integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                this._div.innerHTML = '<h4>Kecamatan</h4>' + (props ?
                    '<b>' + props.NAMOBJ + '</b><br />' + props.MhsSIF + ' orang' :
                    'Gerakkan mouse Anda');
            };

            info.addTo(map);

            function style(feature) {
                return {
                    weight: 2,
                    opacity: 1,
                    color: 'white',
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
            for (var i = 0; i < datamap.length; i++) {
                marker = new L.marker([datamap[i][1], datamap[i][2]])
                    .bindPopup(datamap[i][0])
                    .addTo(map);
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

            //pemanggilan legend
            legend.onAdd = function(map) {

                var div = L.DomUtil.create('div', 'info legend'),
                    grades = [0, 12, 25, 37, 50, 62, 75, 87], //pretty break untuk 8
                    labels = [],
                    from, to;

                for (var i = 0; i < grades.length; i++) {
                    from = grades[i];
                    to = grades[i + 1];

                    labels.push(
                        '<i style="background:' + getColor(from + 1) + '"></i> ' +
                        from + (to ? '&ndash;' + to : '+'));
                }

                div.innerHTML = '<h4>Legenda:</h4><br>' + labels.join('<br>');
                return div;
            };

            legend.addTo(map);
           
        </script>
    @endpush
