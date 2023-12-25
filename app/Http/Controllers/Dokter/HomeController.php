<?php

namespace App\Http\Controllers\dokter;

use App\Http\Controllers\Controller;
use App\Models\daftar_pasien;
use App\Models\jadwal_dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\user;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $now = Carbon::now()->setTimezone('Asia/Makassar');
        $hari = $now->toDateString();
        $data = daftar_pasien::where('poli_tujuan',$user->spesialis)->where('konfirmasi','belum dipanggil')->where('tgl_kunjungan',$hari)->count();
        $sudah = daftar_pasien::where('poli_tujuan',$user->spesialis)->where('konfirmasi','Sudah Dipanggil')->where('tgl_kunjungan',$hari)->count();
        $total = daftar_pasien::where('poli_tujuan',$user->spesialis)->where('tgl_kunjungan',$hari)->count();
        // dd($data);

        return view('admin.dokter.home', compact('data','total','sudah'));
    }

    public function JadwalDokter()
    {
        $user = Auth::user();
        $jadwal = jadwal_dokter::where('spesialis',$user->spesialis)->get();

        return view('admin.dokter.jadwaldokter', compact('jadwal'));
    }

    public function DaftarPasien()
    {
        $user = Auth::user();
        $pasien = daftar_pasien::where('poli_tujuan',$user->spesialis)->where('konfirmasi','belum dipanggil')->get();

        return view('admin.dokter.daftarpasien', compact('pasien'));
    }
}
