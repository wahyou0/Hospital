<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\daftar_pasien;
use App\Models\jadwal_dokter;
use App\Models\kamar_rawat;
use App\Models\konfirmasi_pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardControllor extends Controller
{
    public function index()
    {
        $pasien = konfirmasi_pasien::all()->count();

        $now = Carbon::now()->setTimezone('Asia/Makassar');
        $hari = $now->toDateString();
        $antrian = daftar_pasien::all()->where('tgl_kunjungan',$hari)->where('konfirmasi','belum dipanggil')->count();
        $no_antrian = daftar_pasien::all()->where('tgl_kunjungan',$hari)->where('konfirmasi','belum dipanggil')->first();
        // dd($no_antrian);
        

        return view('user.home', compact('antrian','pasien','no_antrian'));
    }

    public function layanan()
    {
        return view('user.layanan.index');
    }

    public function dokter()
    {
        $dokter = jadwal_dokter::all();

        return view('user.jadwal.index', compact('dokter'));
    }

    public function kamar()
    {
        $kamar = kamar_rawat::all();

        return view('user.kamar.index', compact('kamar'));
    }
}
