@extends('admin.dashboard')
@section('content')

    <div class="col-md-10">
        <form class="js-validation" action="{{ url('instalasi/update')}}" method="POST">
            @csrf
            <div class="block block-themed block-rounded">
                <div class="block-header bg-gd-sea">
                <h3 class="block-title">Edit Data Pasien</h3>
                </div>
                <div class="block-content">
                    <div class="block-content block-content-full">
                        <!-- Regular -->
                        <h2 class="content-heading">Jadwal Dokter</h2>
                        <div class="row items-push">
                            <div class="col-lg-8 col-xl-10">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                
                                <div class="mb-4">
                                    <label class="form-label" for="val-select2">Instalasi <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-select" id="instalasi" name="pelayanan" style="width: 100%;" data-placeholder="Choose one..">
                                        <option hidden value="{{ $data->pelayanan }}">{{ $data->pelayanan }}</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="Rawat Jalan">Rawat Jalan</option>
                                        <option value="Rawat Inap">Rawat Inap</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="val-select2">Layanan <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-select" id="namaruang" name="nama_ruangan" style="width: 100%;">
                                        
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="val-select2">Kelas <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-select" id="kelas" name="kelas" style="width: 100%;">
                                        
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">No. Registrasi</label>
                                    <input type="text" class="form-control" name="no_registrasi" value="{{ $data->no_registrasi}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">No. Rekam Medis</label>
                                    <input type="text" class="form-control" name="no_rekam_medis" value="{{ $data->no_rekam_medis}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">No. Antrian</label>
                                    <input type="text" class="form-control" name="no_antrian" value="{{ $data->no_antrian}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">loket</label>
                                    <input type="text" class="form-control" name="loket" value="{{ $data->loket}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Jenis Pasien</label>
                                    <input type="text" class="form-control" name="jenis_pasien" value="{{ $data->jenis_pasien}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Nama Pasien</label>
                                    <input type="text" class="form-control" name="nama_pasien" value="{{ $data->nama_pasien}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">NIK</label>
                                    <input type="text" class="form-control" name="nik" value="{{ $data->nik}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $data->tempat_lahir}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tgl. Lahir</label>
                                    <input type="text" class="form-control" name="tgl_lahir" value="{{ $data->tgl_lahir}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Kontak Pasien</label>
                                    <input type="text" class="form-control" name="no_hp" value="{{ $data->no_hp}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Cara Bayar</label>
                                    <input type="text" class="form-control" name="cara_bayar" value="{{ $data->cara_bayar}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tgl. Kunjungan</label>
                                    <input type="text" class="form-control" name="tgl_kunjungan" value="{{ $data->tgl_kunjungan}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Poli Tujuan</label>
                                    <input type="text" class="form-control" name="poli_tujuan" value="{{ $data->poli_tujuan}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Dokter</label>
                                    <input type="text" class="form-control" name="dokter" value="{{ $data->dokter}}">
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

    <script src="{{ asset('code/assets/js/lib/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#instalasi').on('change', function(){
                var instalasi = $(this).val();
                // console.log(instalasi);
                if (instalasi) {
                    $.ajax({
                        url: '/instalasi/' + instalasi,
                        type: 'GET',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(data){
                            // console.log(data);
                            if (data) {
                                $('#namaruang').empty();
                                $('#namaruang').append('<option value="">--pilih--</option>');
                                $.each(data,function(key, ruang){
                                    $('select[name="nama_ruangan"]').append(
                                        '<option value="' + ruang.nama_ruangan + '">' +
                                            ruang.nama_ruangan + '</option>'
                                    );
                                    
                                            //untuk dropdown ke 3
                                        $('#namaruang').on('change', function(){
                                            var kelas =  $(this).val();
                                            // console.log(kelas);
                                            if (kelas) {
                                                $.ajax({
                                                    url: '/kelas/' + kelas,
                                                    type: 'GET',
                                                    data: {
                                                        '_token': '{{ csrf_token() }}'
                                                    },
                                                    dataType: 'json',
                                                    success: function(kel){
                                                    // console.log(kel);
                                                        if (kel) {
                                                            $('#kelas').empty();
                                                            $('#kelas').append('<option value="">--pilih--</option>');
                                                            $.each(kel,function(key, kelas){
                                                                $('select[name="kelas"]').append(
                                                                '<option value="' + kelas.kelas + '">' +
                                                                    kelas.kelas + '</option>'
                                                                );
                                                            });
                                                        } else {
                                                            $('#kelas').empty();
                                                        }
                                                    }
                                                });
                                            } else {
                                                $('#namaruang').empty();
                                            }
                                        })

                                });
                            } else {
                                $('#namaruang').empty();
                            }
                        }
                    });
                } else {
                    $('#instalasi').empty();
                }
            });
        });
    </script>

@endsection