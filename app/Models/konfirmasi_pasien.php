<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konfirmasi_pasien extends Model
{
    protected $table = 'konfirmasi_pasien';
    protected $fillable = [
        'id',
        'no_registrasi',
        'no_antrian',
        'loket',
        'jenis_pasien',
        'nama_pasien',
        'jkl_pasien',
        'nik',
        'no_rekam_medis',
        'tempat_lahir',
        'tgl_lahir',
        'no_hp',
        'cara_bayar',
        'tgl_kunjungan',
        'poli_tujuan',
        'dokter',
        'konfirmasi'
    ];
}
