@extends('layouts.app')
@section('content')
    <div class="container-xl">
        <div class="table-responsive" style="background-color: white">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Vaksinasi</b></h2>
                        </div>
                        <div class="col-sm-6 text-end">

                            <a href="{{ route('tambah data') }}" class="btn btn-success"><i
                                    class="material-icons">&#xE147;</i> <span>Masukkan Data Baru</span></a>

                        </div>
                        <div class="col mb-2">
                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="button" class="btn text-white" style="background-color: #1A3C40"
                                    onclick="document.getElementById('import').click()" value="Tambah csv" />
                                <input type="file" id="import" name="file" onchange="form.submit()"
                                    accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                    class="btn btn-danger d-none">
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="table">
                    <thead>
                        <tr>
                            <th rowspan="2" class="align-middle py-0">no</th>
                            <th rowspan="2" class="align-middle py-0">Tanggal</th>
                            <th rowspan="2" class="align-middle py-0">Kecamatan</th>
                            <th rowspan="2" class="align-middle py-0">Desa</th>
                            <th rowspan="2" class="align-middle py-0">Dosis</th>
                            <th colspan="6" class="align-middle py-0 text-center">Kelompok</th>
                            <th rowspan="2" class="align-middle py-0">Total</th>
                            <th rowspan="2" class="align-middle py-0">Actions</th>
                        </tr>
                        <tr>
                            <th class="py-0 align-top">Nakes</th>
                            <th class="py-0 align-top" style="width:15%">Petugas Publik</th>
                            <th class="py-0 align-top">Lansia</th>
                            <th class="py-0 align-top" style="width:20%">masyarakat umum</th>
                            <th class="py-0 align-top">Remaja</th>
                            <th class="py-0 align-top" style="width:25%">usia 6-11 tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->tematik->kecamatan }}</td>
                                <td>{{ $item->desa ? $item->desa->desa : '' }}</td>
                                <td>{{ $item->Kelompok }}</td>
                                <td>{{ $item->nakes +$item->pendaftaran->where('kelompok', 'nakes')->where('desa_id', $item->desa_id)->count() }}
                                </td>
                                <td>{{ $item->petugas_publik +$item->pendaftaran->where('kelompok', 'petugas publik')->where('desa_id', $item->desa_id)->count() }}
                                </td>
                                <td>{{ $item->lansia +$item->pendaftaran->where('kelompok', 'lansia')->where('desa_id', $item->desa_id)->count() }}
                                </td>
                                <td>{{ $item->masyarakat_umum +$item->pendaftaran->where('kelompok', 'masyarakat umum')->where('desa_id', $item->desa_id)->count() }}
                                </td>
                                <td>{{ $item->remaja +$item->pendaftaran->where('kelompok', 'remaja')->where('desa_id', $item->desa_id)->count() }}
                                </td>
                                <td>{{ $item->usia +$item->pendaftaran->where('kelompok', 'usia 6-11 tahun')->where('desa_id', $item->desa_id)->count() }}
                                </td>
                                <td>{{ $item->nakes +
                                    $item->petugas_publik +
                                    $item->lansia +
                                    $item->masyarakat_umum +
                                    $item->remaja +
                                    $item->usia +
                                    +$item->pendaftaran->where('desa_id', $item->desa_id)->count() }}
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
    <style>
        .buttons-pdf {
            background-color: #1A3C40;
            border-radius: 12px;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: 12px;
            color: white;
        }

    </style>
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
            $('#table').DataTable({
                pageLength: 100,
                dom: 'Bfrtip',
                fixedHeader: true,
                buttons: [{
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                }]
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
@endsection
