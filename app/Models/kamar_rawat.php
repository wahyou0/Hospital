<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar_rawat extends Model
{
    protected $table = 'kamar_rawat';
    protected $fillable = [
        'id',
        'nama_ruangan',
        'fasilitas',
        'isi',
        'kososng',
        'jumlah_kamar',
        'kelas',
    ];
}
