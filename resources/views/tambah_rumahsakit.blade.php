@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('post rumahsakit') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Rumah Sakit</label>
                            <select name="halaman_data2_id" id="" required>
                                <option value="">--Pilih Rumah Sakit--</option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->lokasi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-end mt-4" type="submit">Tambah</button>
            </form>
        </div>
    </div>
@endsection
