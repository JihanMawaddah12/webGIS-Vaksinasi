@extends('layouts.app')


<section class="w-100" style="background-color: #4F8A8B">
    <a href="{{ route('login') }}" class="text-decoration-none text-white m-4 py-1 btn btn-outline-light me-2">
        <h4>Log in</h4>
    </a>
    <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
        <h4>Home</h4>
    </a>
    <a href="{{ route('Rute') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
        <h4>Rute</h4>
    </a>
    <a href="{{ route('panduan') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn"
        style="border-bottom:1px solid white;">
        <h4>Panduan</h4>
    </a>
    <a href="{{ route('pendaftaran') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
        <h4>Daftar Vaksinasi</h4>
    </a>
</section>
@section('content')
    <div class="container">

        <div class="card p-4">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-1">
                            <h4 class="bg-info text-white rounded-circle px-2" style="width: fit-content">
                                1
                            </h4>
                        </div>
                        <div class="col-md-6">
                            Text
                        </div>
                    </div>
                    <img width="200" src="{{ asset('storage/img/left-image.png') }}" alt="">
                </div>
                <div class="col">
                </div>
            </div>

        </div>

    </div>
@endsection
