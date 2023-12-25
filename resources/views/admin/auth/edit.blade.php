@extends('admin.dashboard')
@section('content')

    <div class="col-md-10">
        <form class="js-validation" action="{{ url('auth/update')}}" method="POST">
            @csrf
            <div class="block block-themed block-rounded">
                <div class="block-header bg-gd-sea">
                <h3 class="block-title">Edit</h3>
                </div>
                <div class="block-content">
                    <div class="block-content block-content-full">
                        <!-- Regular -->
                        <h2 class="content-heading">Jadwal Dokter</h2>
                        <div class="row items-push">
                            <div class="col-lg-8 col-xl-10">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <div class="mb-4">
                                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="poli_tujuan" placeholder="Your valid Spesialis.." value="{{ $data->name }}" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Spesialis <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-select" name="spesialis" required style="width: 100%;" data-placeholder="Choose one..">
                                        <option hidden value="{{ $data->spesialis }}">{{ $data->spesialis }}</option>
                                        @foreach ($loket as $item )
                                            <option value={{ $item->poli_tujuan }}>{{ $item->poli_tujuan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Jadwal</label>
                                    <textarea class="form-control" name="jadwal" rows="3" > {{ $data->jadwal}} </textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">poli <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="poli_tujuan" placeholder="Your valid Spesialis.." required>
                                </div>
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-check opacity-50 me-1"></i> Simpan
                                </button>
                                <button type="reset" class="btn btn-alt-secondary">
                                    <i class="fa fa-sync-alt opacity-50 me-1"></i> Reset
                                </button>
                            </div>
                        </div>
                        <!-- END Regular -->
                        
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection