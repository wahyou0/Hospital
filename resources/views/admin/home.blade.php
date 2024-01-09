@extends('admin.dashboard')
@section('content')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <!-- Row #1 -->
                <div class="col-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                    <div class="d-none d-sm-block">
                        <i class="fa fa-users fa-2x opacity-25"></i>
                    </div>
                    <div>
                        <div class="fs-3 fw-semibold">{{ $baru }}</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">New patient</div>
                    </div>
                    </div>
                </a>
                </div>
                <div class="col-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                    <div class="d-none d-sm-block">
                        <i class="fa fa-users fa-2x opacity-25"></i>
                    </div>
                    <div>
                        <div class="fs-3 fw-semibold">{{ $lama}}</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Old Patients</div>
                    </div>
                    </div>
                </a>
                </div>
                <div class="col-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-end" href="{{ url('daftar-antrian') }}">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                    <div class="d-none d-sm-block">
                        <i class="fa fa-clock fa-2x opacity-25"></i>
                    </div>
                    <div>
                        <div class="fs-3 fw-semibold">{{ $antrian }}</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Queue</div>
                    </div>
                    </div>
                </a>
                </div>
                <div class="col-6 col-xl-3">
                <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
                    <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                    <div class="d-none d-sm-block">
                        <i class="fa fa-file-circle-check fa-2x opacity-25"></i>
                    </div>
                    <div>
                        <div class="fs-3 fw-semibold">{{ $total }}</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Total Patients</div>
                    </div>
                    </div>
                </a>
                </div>
                <!-- END Row #1 -->
            </div>
        
        </div>
        <!-- END Page Content -->
    </main>
    
@endsection