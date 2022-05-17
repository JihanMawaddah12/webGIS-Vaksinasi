@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('storage/css/halaman-data.css') }}">
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
                                <span class="bg-success text-white rounded-circle px-1" style="width: fit-content">
                                    1
                                </span>
                            </div>
                            <div class="col-md-6">
                                <h5> Tekan tombol "Daftar Vaksinasi"
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
@endsection
