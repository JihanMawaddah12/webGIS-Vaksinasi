@extends('layouts.app')
@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Vaksinasi</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('tambah data') }}" class="btn btn-success"><i
                                    class="material-icons">&#xE147;</i> <span>Masukkan Data Baru</span></a>

                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="table">
                    <thead>
                        <tr>
                            <th>
                                no
                            </th>
                            <th>Tanggal</th>
                            <th>Kecamatan</th>
                            <th>Kelompok</th>
                            <th>Nakes</th>
                            <th>Petugas Publik</th>
                            <th>Lansia</th>
                            <th>masyarakat umum</th>
                            <th>Remaja</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $item->created_at->format('Y-M-D') }}</td>
                                <td>{{ $item->tematik->kecamatan }}</td>
                                <td>{{ $item->Kelompok }}</td>
                                <td>{{ $item->nakes }}</td>
                                <td>{{ $item->petugas_publik }}</td>
                                <td>{{ $item->lansia }}</td>
                                <td>{{ $item->masyarakat_umum }}</td>
                                <td>{{ $item->remaja }}</td>
                                <td>{{ $item->nakes + $item->petugas_publik + $item->lansia + $item->masyarakat_umum + $item->remaja }}
                                </td>

                                <td class="w-25">

                                    <form action="{{ route('delete data', ['id' => $item->id]) }}" method="get">
                                        <a href="{{ route('edit data', ['id' => $item->id]) }}" class="edit"><i
                                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <button type="submit" class="delete show_confirm border-0 p-0 bg-transparent"><i
                                                class="material-icons" data-toggle="tooltip"
                                                title="Delete">&#xE872;</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Anda yakin ingin menghapus data ini?`,
                    text: "Jika kamu menghapus, data akan hilang parmanen.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection
