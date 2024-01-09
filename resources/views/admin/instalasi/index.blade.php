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
                {{-- <a href="{{ url('pendaftaran-pasien/cek')}}" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah</a> --}}
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 2%">No.</th>
                            <th>No. RM</th>
                            <th>Nama Pasien</th>
                            <th>Tgl Lahir</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Jenis</th>
                            <th>Cara Bayar</th>
                            <th>Unit Pelayanan</th>
                            <th>Instalasi</th>
                            <th class="text-center" style="width: 12%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($instalasi as $data)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td class="fw-semibold">{{ $data->no_rekam_medis }}</td>
                                <td>{{ $data->nama_pasien }}</td>
                                <td>{{ $data->tgl_lahir }}</td>
                                <td>{{ $data->tgl_kunjungan }}</td>
                                <td>{{ $data->jenis_pasien }}</td>
                                <td>{{ $data->cara_bayar }}</td>
                                <td>{{ $data->poli_tujuan }}</td>
                                <td>{{ $data->pelayanan }}</td>
                            <td>
                                <form action="{{ url('instalasi/delete/'.$data->id) }}" method="POST">
                                    @csrf
                                    <a class="btn btn-alt-success" href="{{ url('instalasi/edit/'.$data->id) }}" data-bs-toggle="tooltip" title="Edit Data">
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