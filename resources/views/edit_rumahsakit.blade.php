@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update rumahsakit') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Rumah Sakit</label>
                            <select name="halaman_data2_id" id="" required class="form-control">
                                <option value="">--Pilih Rumah Sakit--</option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $user->rm->halaman_data2_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->lokasi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" value="{{ $user->email }}" required>
                            <input name="user_id" type="hidden" class="form-control" value="{{ $user->id }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <button class="btn float-end mt-4 text-white" type="submit"
                    style="background-color: #1D5C63">Update</button>
            </form>
        </div>
    </div>
@endsection
