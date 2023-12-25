<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loket extends Model
{
    protected $table = 'loket';
    protected $fillable = [
        'id',
        'kode_loket',
        'poli_tujuan',
    ];
}
