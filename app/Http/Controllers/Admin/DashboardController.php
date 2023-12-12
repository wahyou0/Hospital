<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\daftar_pasien;
use App\Models\konfirmasi_pasien;

class DashboardController extends Controller
{
    public function index()
    {
        // $total = konfirmasi_pasien::all()->count();
        $baru = konfirmasi_pasien::all()->where('jenis_pasien','Pasien Baru')->count();
        $lama = konfirmasi_pasien::all()->where('jenis_pasien','Pasien Lama')->count();
        $antrian = daftar_pasien::all()->where('konfirmasi','belum dipanggil')->count();
        $total = $lama + $baru;

        return view('admin.home', compact('total','baru','lama','antrian'));
    }
}
