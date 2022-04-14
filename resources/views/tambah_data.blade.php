@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('data vaksin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-select" name="tematik_id" required>
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($tematik as $kecamatan)
                                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dosis</label>
                            <select class="form-select" name="kelompok" required>
                                <option value="">Pilih Dosis</option>
                                <option value="Target">Target</option>
                                <option value="Dosis 1">Dosis 1</option>
                                <option value="Dosis 2">Dosis 2</option>
                                <option value="Dosis 3">Dosis 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nakes</label>
                            <input name="nakes" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Petugas Publik</label>
                            <input name="petugas_publik" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input name="tanggal" type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Desa</label>
                            <select class="form-select" name="desa_id" required>
                                <option value="">Pilih Desa</option>
                                @foreach ($desa as $item)
                                    <option value="{{ $item->id }}">{{ $item->desa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lansia</label>
                            <input name="lansia" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Masyarakat Umum</label>
                            <input name="masyarakat_umum" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Remaja</label>
                            <input name="remaja" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>usia 6-11 tahun</label>
                            <input name="usia" type="number" class="form-control" required>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary float-end mt-4" type="submit">Tambah</button>
            </form>
        </div>
    </div>
@endsection
