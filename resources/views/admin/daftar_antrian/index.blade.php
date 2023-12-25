@extends('admin.dashboard')
@section('content')

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Tabel <small>Daftar Antrian</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>Loket</th>
                            <th>No. Antrian</th>
                            <th>No. Rekam Medis</th>
                            <th>Nik</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Jenis</th>
                            <th>Cara Bayar</th>
                            <th>Unit Pelayanan</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($antrian as $data)
                        <tr>
                            <td>{{ $data->loket }}</td>
                            <td>{{ $data->no_antrian}}</td>
                            <td class="fw-semibold">{{ $data->no_rekam_medis }}</td>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->nama_pasien }}</td>
                            <td>{{ $data->tgl_kunjungan }}</td>
                            <td>{{ $data->jenis_pasien }}</td>
                            <td>{{ $data->cara_bayar }}</td>
                            <td>{{ $data->poli_tujuan }}</td>
                            <td>{{ $data->konfirmasi}}</td>
                            <td>
                                <a class="btn btn-alt-success" href="{{ url('daftar-antrian/edit/'.$data->id) }}" data-bs-toggle="tooltip" title="Panggil">
                                    <i class="fa fa-pen-to-square"></i>panggil
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection