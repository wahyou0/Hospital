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
                {{-- <a href="{{ url('jadwal-dokter/create')}}" class="btn btn-alt-success"><i class="far fa-square-plus"></i> Tambah</a> --}}
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>Nama Dokter</th>
                            <th>Umum/Spesialis</th>
                            <th style="width: 28%;">Jadwal</th>
                            {{-- <th class="text-center" style="width: 20%;">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($jadwal as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="fw-semibold">{{ $data->nama_dokter }}</td>
                            <td>{{ $data->spesialis }}</td>
                            <td>{{ $data->jadwal }}</td>
                            {{-- <td>
                                <form action="{{ url('jadwal-dokter/delete/'.$data->id) }}" method="POST">
                                    @csrf
                                    <a href="" class="btn btn-alt-info" data-bs-toggle="tooltip" title="View Data">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a class="btn btn-alt-success" href="{{ url('jadwal-dokter/edit/'.$data->id) }}" data-bs-toggle="tooltip" title="Edit Data">
                                        <i class="fa fa-pen-to-square"></i>
                                    </a>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-alt-danger show-alert-delete-box" data-bs-toggle="tooltip" title="Hapus Data">
                                        <i class="fa fa-trash-can"></i>
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection