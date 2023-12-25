@extends('admin.dashboard')
@section('content')

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Tabel <small>Jadwal Dokter</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Spesialis</th>
                            <th>Image</th>
                            <th class="text-center" style="width: 7%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($list as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="fw-semibold">{{ $data->name }}</td>
                            <td>{{ $data->username}}</td>
                            <td>{{ $data->spesialis }}</td>
                            <td><img src="{{ asset('storage/'.$data->image) }}" alt="" style="width: 20mm"></td>
                            <td>
                                <form action="{{ url('auth/delete/'.$data->id) }}" method="POST">
                                    @csrf
                                    {{-- <a href="" class="btn btn-alt-info" data-bs-toggle="tooltip" title="View Data">
                                        <i class="fa fa-user"></i>
                                    </a> --}}
                                    {{-- <a class="btn btn-alt-success" href="{{ url('auth/edit/'.$data->id) }}" data-bs-toggle="tooltip" title="Edit Data">
                                        <i class="fa fa-pen-to-square"></i>
                                    </a> --}}
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