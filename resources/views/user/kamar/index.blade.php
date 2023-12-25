@extends('user.dashboard')
@section('content') 

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Tabel <small>Kamar Rawat</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>Nama Ruangan</th>
                            <th>Fasilitas</th>
                            <th>Isi</th>
                            <th>Kosong</th>
                            <th>Jumlah Kamar</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($kamar as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="fw-semibold">{{ $data->nama_ruangan }}</td>
                            <td>{{ $data->fasilitas }}</td>
                            <td>{{ $data->isi }}</td>
                            <td>{{ $data->kososng }}</td>
                            <td>{{ $data->jumlah_kamar }}</td>
                            <td>{{ $data->kelas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection