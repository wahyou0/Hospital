@extends('admin.dashboard')
@section('content')   
    
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Alternate</h3>
        </div>
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

                <h2 class="content-heading">Step Two</h2>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                    <h3 class="block-title">{{ $data->jenis_pasien ?? '' }}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                    </div>
                    <div class="block-content">
                    <form action="{{ url('pendaftaran-pasien/post-step-two') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label class="form-label">Nomor Rekam Medis</label>
                                        <input type="text" class="form-control form-control-lg" name="no_rekam_medis" placeholder="" disabled>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Nama Pasien</label>
                                        <input type="text" class="form-control form-control-lg" name="nama_pasien" value="{{ $data->nama_pasien ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control form-control-lg" name="tempat_lahir" value="{{ $data->tempat_lahir ?? '' }}">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control form-control-lg" name="tgl_lahir" value="{{ $data->tgl_lahir ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label class="form-label">Nik</label>
                                        <input type="text" class="form-control form-control-lg" name="nik" value="{{ $data->nik ?? ''}}">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Kontak Pasien</label>
                                        <input type="text" class="form-control form-control-lg" name="no_hp" value="{{ $data->no_hp ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="val-select2">Pilih Cara Bayar <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select" id="val-select2" name="cara_bayar" required style="width: 100%;" data-placeholder="Choose one..">
                                    <option hidden value="{{ $data->cara_bayar ?? '' }}">{{ $data->cara_bayar }}</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="BRI">BRI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="Mandiri">Mandiri</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label">Tanggal Kunjungan<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tgl_kunjungan" value="{{ $data->tgl_kunjungan ?? '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label class="form-label">Poli Klinik tujuan <span class="text-danger">*</span></label>
                                        <select class="js-select2 form-select" name="loket" required style="width: 100%;" data-placeholder="Choose one..">
                                            <option hidden value="{{ $data->loket ?? '' }}">{{ $data->loket }}</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="Loket A">Loket A</option>
                                            <option value="Loket B">Loket B</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Klinik <span class="text-danger">*</span></label>
                                        <select class="js-select2 form-select" name="poli_tujuan" required style="width: 100%;" data-placeholder="Choose one..">
                                            <option hidden value="{{ $data->poli_tujuan ?? '' }}">{{ $data->poli_tujuan }}</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="Gigi">Gigi</option>
                                            <option value="Anak">Anak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label">Dokter</label>
                                <select class="js-select2 form-select" name="dokter" required style="width: 100%;" data-placeholder="Choose one..">
                                    <option hidden value="{{ $data->dokter ?? '' }}">{{ $data->dokter }}</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="Dokter A">Dokter A</option>
                                    <option value="Dokter B">Dokter B</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                        <a href="{{ url('pendaftaran-pasien/create-step-one-baru') }}" class="btn btn-danger pull-right">
                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Kembali
                        </a>
                        
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-check opacity-50 me-1"></i> lanjut
                        </button>
                        <button type="reset" class="btn btn-alt-secondary">
                            <i class="fa fa-sync-alt opacity-50 me-1"></i> Reset
                        </button>
                        </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection