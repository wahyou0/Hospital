@extends('admin.dashboard')
@section('content')

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Tabel <small>Report</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 2%">No.</th>
                            <th>No. Rekam Medis</th>
                            <th>Nik</th>
                            <th>Nama Pasien</th>
                            <th>JKL</th>
                            <th>Tempat, Tgl Lahir</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Jenis</th>
                            <th>Cara Bayar</th>
                            <th>Unit Pelayanan</th>
                            <th>Instalasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($report as $data)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td class="fw-semibold">{{ $data->no_rekam_medis }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>{{ $data->nama_pasien }}</td>
                                <td>{{ $data->jkl_pasien }}</td>
                                <td>{{ $data->tempat_lahir }},{{ $data->tgl_lahir }}</td>
                                <td>{{ $data->tgl_kunjungan }}</td>
                                <td>{{ $data->jenis_pasien }}</td>
                                <td>{{ $data->cara_bayar }}</td>
                                <td>{{ $data->poli_tujuan }}</td>
                                <td>{{ $data->pelayanan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection