@extends('admin.dashboard')
@section('content')

    <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
            <h3 class="block-title">
                Table <small>User lis</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">No.</th>
                            <th>Full name</th>
                            <th>Username</th>
                            <th>Specialist</th>
                            <th>Image</th>
                            <th>Level</th>
                            <th class="text-center" style="width: 5%;">Action</th>
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
                            <td>@if ($data->level == 1)
                                     Admin 
                                @else
                                     Doctor
                                @endif
                            </td>
                            <td>
                                <form action="{{ url('auth/delete/'.$data->id) }}" method="POST">
                                    @csrf
                                    {{-- <a href="" class="btn btn-alt-info" data-bs-toggle="tooltip" title="View Data">
                                        <i class="fa fa-user"></i>
                                    </a> --}}
                                    @if ($data->level == 1)
                                        <a class="btn btn-alt-success" href="{{ url('auth/editAdmin/'.$data->id) }}" data-bs-toggle="tooltip" title="Edit Data">
                                            <i class="fa fa-pen-to-square"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-alt-success" href="{{ url('auth/editDokter/'.$data->id) }}" data-bs-toggle="tooltip" title="Edit Data">
                                            <i class="fa fa-pen-to-square"></i>
                                        </a> 
                                    @endif
                                    
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-alt-danger show-alert-delete-box" data-bs-toggle="tooltip" title="delete">
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