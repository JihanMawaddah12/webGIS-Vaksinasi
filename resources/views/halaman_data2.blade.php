@extends('layouts.app')
@section('content')
    <div class="container-xl">
        <div class="table-responsive" style="background-color: white">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Lokasi Vaksinasi</b></h2>
                        </div>
                        <div class="col-sm-6 text-end">
                            <a href="{{ route('tambah data2') }}" class="btn btn-success"><i
                                    class="material-icons">&#xE147;</i> <span>Masukkan Data Baru</span></a>

                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="table">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Kecamatan</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Kapasitas</th>
                            <th>Deskripsi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $item->tematik->kecamatan }}</td>
                                <td>{{ $item->lokasi }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->kapasitas }}</td>
                                <td>{{ $item->deskripsi }}</td>

                                <td class="w-25">

                                    <form action="{{ route('delete data2', ['id' => $item->id]) }}" method="get">
                                        <a href="{{ route('detail map', ['id' => $item->id]) }}" class="edit"><i
                                                class="fas fa-map-marker-alt text-danger"></i></a>
                                        <a href="{{ route('edit data2', ['id' => $item->id]) }}" class="edit"><i
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
