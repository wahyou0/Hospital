<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_pasien;

class DaftarAntrianController extends Controller
{
    public function index()
    {
        $antrian = daftar_pasien::all()->where('konfirmasi','belum dipanggil');
        
        return view('admin.daftar_antrian.index', compact('antrian'));
    }

    public function edit($id)
    {
        $data = daftar_pasien::find($id);
        $data->konfirmasi = 'Sudah Dipanggil';
        
        if ($data->save()) {
            return redirect('/daftar-antrian')->with('success', 'The patient was successfully called');
        }
        else {
            return redirect('/daftar-antrian')->with('gagal', 'Patient failed to call');
        }
    }
}
