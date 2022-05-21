@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update data2', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-select" name="kecamatan" required>
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($tematik as $kecamatan)
                                    <option {{ $kecamatan->id == $data->tematik->id ? 'selected' : '' }}
                                        value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama Lokasi</label>
                            <input value="{{ $data->lokasi }}" name="lokasi" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input value="{{ $data->alamat }}" name="alamat" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Vaksin</label>
                            <input value="{{ $data->deskripsi }}" name="deskripsi" type="text" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kapasitas</label>
                            <input name="kapasitas" value="{{ $data->kapasitas }}" type="text" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Longitude</label>
                            <input id='longitude' name="long" type="text" class="form-control" required
                                value="{{ $data->long }}">
                        </div>
                        <div class="form-group">
                            <label>Latitude</label>
                            <input id='latitude' name="lat" type="text" class="form-control" required
                                value="{{ $data->lat }}">
                        </div>
                    </div>
                </div>
                <div class="container mt-4" id="mapid"></div>
                <button class="btn float-end mt-4 text-white" type="submit"
                    style="background-color: #1D5C63">Simpan</button>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
        #mapid {
            min-height: 500px;
        }

    </style>
@endsection

@push('scripts')
    <!-- Leaflet JavaScript -->
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <script>
        let latitude = document.getElementById('latitude').value;
        let longitude = document.getElementById('longitude').value;
        var mapCenter = [
            latitude,
            longitude,
        ];
        var map = L.map('mapid').setView(mapCenter, {{ config('leafletsetup.zoom_level') }});
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var marker = L.marker(mapCenter).addTo(map);

        function updateMarker(lat, lng) {
            marker
                .setLatLng([lat, lng])
                .bindPopup("Your location :" + marker.getLatLng().toString())
                .openPopup();
            return false;
        };
        map.on('click', function(e) {
            let latitude = e.latlng.lat.toString().substring(0, 15);
            let longitude = e.latlng.lng.toString().substring(0, 15);
            $('#latitude').val(latitude);
            $('#longitude').val(longitude);
            updateMarker(latitude, longitude);
        });
        var updateMarkerByInputs = function() {
            return updateMarker($('#latitude').val(), $('#longitude').val());
        }
        $('#latitude').on('input', updateMarkerByInputs);
        $('#longitude').on('input', updateMarkerByInputs);
    </script>
@endpush
