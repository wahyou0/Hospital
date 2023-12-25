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
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>No. Rekam Medis</th>
                            <th>Nama Pasien</th>
                            <th>Tempat Tgl. Lahir</th>
                            <th>Status</th>
                            <th>tgl. Kunjungan</th>
                            <th>Unit Pelayanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($pasien as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="fw-semibold">{{ $data->no_rekam_medis }}</td>
                            <td>{{ $data->nama_pasien }}</td>
                            <td>{{ $data->tempat_lahir }} {{ $data->tgl_lahir }}</td>
                            <td>{{ $data->jenis_pasien }}</td>
                            <td>{{ $data->tgl_kunjungan }}</td>
                            <td>{{ $data->poli_tujuan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection