@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update data', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-select" name="tematik_id" required>
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($tematik as $kecamatan)
                                    <option {{ $kecamatan->id == $data->tematik->id ? 'selected' : '' }}
                                        value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kelompok</label>
                            <select class="form-select" name="kelompok" required>
                                <option value="">Pilih kelompok</option>
                                <option {{ $data->Kelompok == 'Target' ? 'selected' : '' }} value="Target">Target
                                </option>
                                <option {{ $data->Kelompok == 'Dosis 1' ? 'selected' : '' }} value="Dosis 1">Dosis
                                    1</option>
                                <option {{ $data->Kelompok == 'Dosis 2' ? 'selected' : '' }} value="Dosis 2">Dosis
                                    2</option>
                                <option {{ $data->Kelompok == 'Dosis 3' ? 'selected' : '' }} value="Dosis 3">Dosis
                                    3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nakes</label>
                            <input value="{{ $data->nakes }}" name="nakes" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Petugas Publik</label>
                            <input value="{{ $data->petugas_publik }}" name="petugas_publik" type="number"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input name="tanggal" type="date" class="form-control" value="{{ $data->tanggal }}"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            <label>Desa</label>
                            <select class="form-select" name="desa_id" required>

                                @foreach ($desa as $item)
                                    <option {{ $data->desa ? ($item->id == $data->desa->id ? 'selected' : '') : '' }}
                                        value="{{ $item->id }}">{{ $item->desa }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lansia</label>
                            <input value="{{ $data->lansia }}" name="lansia" type="number" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Masyarakat Umum</label>
                            <input value="{{ $data->masyarakat_umum }}" name="masyarakat_umum" type="number"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Remaja</label>
                            <input value="{{ $data->remaja }}" name="remaja" type="number" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Usia 6 - 11 Tahun</label>
                            <input value="{{ $data->usia }}" name="usia" type="number" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-end mt-4" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
