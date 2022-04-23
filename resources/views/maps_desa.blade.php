@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
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

        .leaflet-right .leaflet-control {
            max-height: 8rem;
            overflow-y: auto;
            padding: 5px;
        }

    </style>
@endsection

@push('scripts')
    <!-- Leaflet JavaScript -->
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
        integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('storage/Leaflet.BigImage/dist/Leaflet.BigImage.min.css') }}">
    <script src="{{ asset('storage/Leaflet.BigImage/dist/Leaflet.BigImage.min.js') }}">
    </script>
    <script>
        var s = [5.554630942893766, 95.31709742351293];
        var color = {!! json_encode($color) !!};
        var data = {!! json_encode($data) !!}
        var tematik = {!! json_encode($tematik) !!}
        var jumlah = {!! json_encode($jumlah) !!}
        var target = {!! json_encode($jmlh_target) !!}

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
        info.update = function(props) {
            this._div.innerHTML = '<h4>Desa</h4>' + (props ?
                '<b>' + props.NAMOBJ + '</b><br /> Jumlah Vaksin <br/> Dosis 1: ' + jumlah['1'][props.NAMOBJ] +
                ' orang (' +
                ((jumlah['1'][props.NAMOBJ] / target[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' +
                'Dosis 2: ' + jumlah['2'][props.NAMOBJ] + ' orang (' +
                ((jumlah['2'][props.NAMOBJ] / target[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' +
                'Dosis 3: ' + jumlah['3'][props.NAMOBJ] + ' orang (' +
                ((jumlah['3'][props.NAMOBJ] / target[props.NAMOBJ]) * 100).toFixed(2) + '%)<br /> ' +
                'Gerakkan mouse Anda' : "");
        };

        info.addTo(map);

        function style(feature) {
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 1.0,
                fillColor: color[feature.properties.NAMOBJ]
            };
        }
        // munculkan highlight pada peta
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


        legend.onAdd = function(map) {

            var div = L.DomUtil.create('div', 'info legend'),
                grades = [0, 12, 25, 37, 50, 62, 75, 87], //pretty break untuk 8
                from, to;
            labels = []
            for (var i = 0; i < 10; i++) {
                labels.push(
                    '<i style="background:' + color[tematik[i]] + '"></i> - ' + tematik[i]);
            }

            div.innerHTML = '<h4>Legenda:</h4>' + labels.join('<br>');
            return div;
        };

        legend.addTo(map);
        L.control.BigImage().addTo(map);
    </script>
@endpush
