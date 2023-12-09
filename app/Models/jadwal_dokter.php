<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_dokter extends Model
{
    protected $table = 'jadwal_dokter';
    protected $fillable = [
        'id',
        'nama_dokter',
        'spesialis',
        'jadwal',
    ];
}
