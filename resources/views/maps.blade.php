@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <div class="text-end">
                <button id="printBtn" class="btn btn-success mb-2">Cetak Peta</button>
            </div>
            <div id="map"></div>
        </div>
    </div>
@endsection

@section('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
        #map {
            min-height: 500px;
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

        .search-input {
            color: black
        }
    </style>
@endsection

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="https://www.jqueryscript.net/demo/jQuery-Plugin-To-Print-Any-Part-Of-Your-Page-Print/jQuery.print.js"></script>
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
        var data = {!! json_encode($data) !!}
        var tematik = {!! json_encode($tematik) !!}
        var jumlah = {!! json_encode($jumlah) !!}
        var target = {!! json_encode($jmlh_target) !!}
        var map = L.map('map').setView(
            s, 13
        );
        var dosis = '1';


        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        function style(feature) {
            warna = "";
            if ((jumlah[dosis][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 >= 0 && (jumlah[dosis][
                    feature.properties.NAMOBJ
                ] / target[feature.properties.NAMOBJ]) * 100 <= 39) {
                warna = 'red';
            } else if ((jumlah[dosis][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 >= 40 && (
                    jumlah[dosis][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 <= 69) {
                warna = 'yellow';
            } else if ((jumlah[dosis][feature.properties.NAMOBJ] / target[feature.properties.NAMOBJ]) * 100 >= 70) {
                warna = 'green';
            }
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 1.0,
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
            if ((jumlah[dosis][props.NAMOBJ] / target[props.NAMOBJ]) * 100 >= 0 && (jumlah[dosis][props.NAMOBJ] / target[
                    props.NAMOBJ]) * 100 <= 39) {
                warna = 'red';
            } else if ((jumlah[dosis][props.NAMOBJ] / target[props.NAMOBJ]) * 100 >= 40 && (jumlah[dosis][props.NAMOBJ] /
                    target[props.NAMOBJ]) * 100 <= 69) {
                warna = 'yellow';
            } else if ((jumlah[dosis][props.NAMOBJ] / target[props.NAMOBJ]) * 100 >= 70) {
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
                    className: 'bg-transparent border-0 text-white shadow-none font-weight-bold'
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
                if ((jumlah[dosis][tematik[i]] / target[tematik[i]]) * 100 >= 0 && (jumlah[dosis][tematik[i]] / target[
                        tematik[i]]) * 100 <= 39) {
                    warna = 'red';
                } else if ((jumlah[dosis][tematik[i]] / target[tematik[i]]) * 100 >= 40 && (jumlah[dosis][tematik[i]] /
                        target[tematik[i]]) * 100 <= 69) {
                    warna = 'yellow';
                } else if ((jumlah[dosis][tematik[i]] / target[tematik[i]]) * 100 >= 70) {
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
                '<i style="background:red"></i>  0%-39% </br></br>' +
                '<i style="background:yellow"></i>  40%-69% </br></br> ' +
                '<i style="background:green"></i>  70%-100% </br></br>';
            div.innerHTML =
                '<div class="row mb-2">' +
                '<div class="col">' +
                '<button class="btn btn-info text-white" id="dosis1" onclick="dosis = \'1\';legend.addTo(map);update()">Dosis 1<button>' +
                '</div>' +
                '<div class="col">' +
                '<button class="btn btn-info text-white" id="dosis2" onclick="dosis = \'2\';legend.addTo(map);update()">Dosis 2</button>' +
                '</div>' +
                '<div class="col">' +
                '<button class="btn btn-info text-white" id="dosis3" onclick="dosis = \'3\';legend.addTo(map);update()">Dosis 3</button>' +
                '</div>' +
                '</div> <br>' + labels;
            return div;

        };

        function update() {
            if (dosis == '1') {
                document.getElementById('dosis1').style.backgroundColor = 'lightGreen'
                document.getElementById('dosis2').style.backgroundColor = '#0dcaf0'
                document.getElementById('dosis3').style.backgroundColor = '#0dcaf0'
            } else if (dosis == '2') {
                document.getElementById('dosis1').style.backgroundColor = '#0dcaf0'
                document.getElementById('dosis2').style.backgroundColor = 'lightGreen'
                document.getElementById('dosis3').style.backgroundColor = '#0dcaf0'
            } else if (dosis == '3') {
                document.getElementById('dosis1').style.backgroundColor = '#0dcaf0'
                document.getElementById('dosis2').style.backgroundColor = '#0dcaf0'
                document.getElementById('dosis3').style.backgroundColor = 'lightGreen'
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
        $("#printBtn").click(function() {
            $('#map').print();
        });
    </script>
@endpush
