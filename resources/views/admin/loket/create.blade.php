@extends('admin.dashboard')
@section('content')
    <div class="col-md-10">
        <form class="js-validation" action="{{ url('loket/store')}}" method="POST">
            @csrf
            <div class="block block-themed block-rounded">
                <div class="block-header bg-gd-sea">
                <h3 class="block-title">Tambah</h3>
                </div>
                <div class="block-content">
                    <div class="block-content block-content-full">
                        <!-- Regular -->
                        <h2 class="content-heading">Data Loket</h2>
                        <div class="row items-push">
                            <div class="col-lg-8 col-xl-10">
                                <div class="mb-4">
                                    <label class="form-label">Loket <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-select" name="kode_loket" required style="width: 100%;" data-placeholder="Choose one..">
                                        <option hidden value=""></option>
                                            <option value="A">Loket A</option>
                                            <option value="B">loket B</option>
                                    </select>
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