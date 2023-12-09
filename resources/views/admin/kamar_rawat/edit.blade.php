@extends('admin.dashboard')
@section('content')
    <div class="col-md-10">
        <form class="js-validation" action="{{ url('kamar-rawat/update')}}" method="POST">
            @csrf
            <div class="block block-themed block-rounded">
                <div class="block-header bg-gd-sea">
                <h3 class="block-title">Edit</h3>
                </div>
                <div class="block-content">
                    <div class="block-content block-content-full">
                        <!-- Regular -->
                        <h2 class="content-heading">Kamar Rawat</h2>
                        <div class="row items-push">
                            <div class="col-lg-8 col-xl-10">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <div class="mb-4">
                                    <label class="form-label">Nama Ruangan <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nama_ruangan" value="{{ $data->nama_ruangan }}" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Fasilitas <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="fasilitas" value="{{ $data->fasilitas }}" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Isi</label>
                                    <input type="number" class="form-control" name="isi" value="{{ $data->isi }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Kosong</label>
                                    <input type="number" class="form-control" name="kosong" value="{{ $data->kosong }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Jumlah Kamar</label>
                                    <input type="number" class="form-control" name="jumlah_kamar" value="{{ $data->jumlah_kamar }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="val-select2">kelas <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-select" id="val-select2" name="kelas" required style="width: 100%;">
                                      <option hidden value="{{ $data->kelas }}">{{ $data->kelas }}</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                      <option value="Ekonomi">Ekonomi</option>
                                      <option value="VIP">VIP</option>
                                      <option value="VVIp">VVIp</option>
                                    </select>
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