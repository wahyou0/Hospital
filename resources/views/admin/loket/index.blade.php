@extends('admin.dashboard')
@section('content')

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Tabel <small>Kamar Rawat</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <a href="{{ url('loket-tambah')}}" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah</a>
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>Kode Loket</th>
                            <th>Poli</th>
                            <th class="text-center" style="width: 12%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($loket as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="fw-semibold">{{ $data->kode_loket }}</td>
                            <td>{{ $data->poli_tujuan }}</td>
                            <td>
                                <form action="{{ url('loket/delete/'.$data->id) }}" method="POST">
                                    @csrf
                                    <a class="btn btn-alt-success" href="{{ url('loket/edit/'.$data->id) }}" data-bs-toggle="tooltip" title="Edit Data">
                                        <i class="fa fa-pen-to-square"></i>
                                    </a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-alt-danger show-alert-delete-box" data-bs-toggle="tooltip" title="Hapus Data">
                                        <i class="fa fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection