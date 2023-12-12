<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loket_option extends Model
{
    protected $table = 'loket_options';
    protected $fillable = [
        'id',
        'kode_loket',
        'loket',
        'poli_tujuan',
        'dokter',
    ];
}
