@extends('admin.dashboard')
@section('content')

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Tabel <small>Daftar Pasien</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <a href="{{ url('pendaftaran-pasien/create-step-one')}}" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah Pasien Lama</a>
                <a href="{{ url('kamar-rawat/create')}}" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah Pasien Baru</a>
                <a href="{{ url('pendaftaran-pasien/cek')}}" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah</a>
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>No. Rekam Medis</th>
                            <th>Nik</th>
                            <th>Nama Pasien</th>
                            <th>Tempat Tgl. Lahir</th>
                            <th>Status</th>
                            <th>Cara Bayar</th>
                            <th>Unit Pelayanan</th>
                            <th class="text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($daftar as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="fw-semibold">{{ $data->no_rekam_medis }}</td>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->nama_pasien }}</td>
                            <td>{{ $data->tempat_lahir }} {{ $data->tgl_lahir }}</td>
                            <td>{{ $data->jenis_pasien }}</td>
                            <td>{{ $data->cara_bayar }}</td>
                            <td>{{ $data->poli_tujuan }}</td>
                            <td>
                                <form action="{{ url('data-pasien/delete/'.$data->id) }}" method="POST">
                                    @csrf
                                    <a href="" class="btn btn-alt-info" data-bs-toggle="tooltip" title="View Data">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a class="btn btn-alt-success" href="{{ url('data-pasien/edit/'.$data->id) }}" data-bs-toggle="tooltip" title="Edit Data">
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