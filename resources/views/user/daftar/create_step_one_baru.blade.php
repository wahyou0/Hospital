@extends('user.dashboard')
@section('content')   
    
    <div class="block block-rounded">
        <div class="block-content block-content-full space-y-3">
            {{-- <nav class="d-flex flex-column flex-lg-row items-center justify-content-between gap-2">
                <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
                <div class="flex-grow-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                    <i class="fa fa-fw fa-check"></i>
                </div>
                <div class="flex-grow-1">
                    <div>Registration</div>
                    <div class="fw-normal">Email and password</div>
                </div>
                </a>
                <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
                <div class="flex-grow-0 rounded-circle border border-3 border-primary d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                    2
                </div>
                <div class="flex-grow-1">
                    <div class="text-primary">Personal Info</div>
                    <div class="fw-normal">Name and address</div>
                </div>
                </a>
                <a href="javascript:void(0)" class="btn btn-lg btn-alt-secondary bg-transparent w-100 text-start fs-sm d-flex align-items-center justify-content-between gap-3">
                <div class="flex-grow-0 rounded-circle bg-body-dark d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                    3
                </div>
                <div class="flex-grow-1">
                    <div>Completion</div>
                    <div class="fw-normal">Preview your account</div>
                </div>
                </a>
            </nav> --}}
            <div class="row">
                <form class="js-validation" action="{{ url('pasien-daftar/Post-step-one-baru')}}" method="POST">
                    @csrf
                    <div class="block block-themed block-rounded">
                        <div class="block-header bg-gd-sea">
                        <h3 class="block-title">Pasien Baru</h3>
                        </div>
                        <div class="block-content">
                            <div class="block-content block-content-full">
                                <!-- Regular -->
                                <div class="row items-push">
                                    <div class="col-lg-10 col-xl-10">
                                        <div class="mb-4">
                                            <input hidden type="text" class="form-control" name="jenis_pasien" value="Pasien Baru">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Nama Pasien <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="nama_pasien" value="{{ $data->nama_pasien ?? '' }}" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $data->tempat_lahir ?? '' }}" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                            <input type="date" class="js-flatpickr form-control" name="tgl_lahir" value="{{ $data->tgl_lahir ?? '' }}" required>
                                        </div>
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-check opacity-50 me-1"></i> Lanjut
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
        </div>
    </div>

@endsection