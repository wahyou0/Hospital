<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\daftar_pasien;
use App\Models\kamar_rawat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstalasiController extends Controller
{
    public function index()
    {
        $instalasi = daftar_pasien::all();

        return view('admin.instalasi.index', compact('instalasi'));
    }

    public function create($id)
    {
        
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit($id)
    {
        $data = daftar_pasien::find($id);

        return view('admin.instalasi.edit', compact('data'));
    }

    
    public function update(Request $request)
    {
        $input = $request->all();

        $ruang = $request->nama_ruangan;
        $kelas = $request->kelas;
        $data = kamar_rawat::where('nama_ruangan',$ruang)->where('kelas',$kelas)->first();
        $kosong = $data->kosong;
        $isi = $data->isi;
        
        if ($kosong >= 1) {
            $kurangi = $kosong - 1;
            $tambah = $isi + 1;
            $data->isi = $tambah;
            $data->kosong = $kurangi;
            $data->save();
        } else {
            return redirect('/instalasi')->with('gagal', 'Kamar Sudah Full');
        }
        
        if (daftar_pasien::find($input['id'])->update($input)){
            return Redirect('instalasi')->with('success', 'updated successfully');
        }
        else{
            return Redirect('instalasi')->with('gagal', 'failed to update');
        }
    }

    
    public function destroy(string $id)
    {
        $data = daftar_pasien::find($id);
        if ($data->delete()) {
            return redirect('/instalasi')->with('success', 'This data has been successfully deleted');
        } else {
            return back()->with(['gagal', 'Failed to delete']);
        }
    }

    //get data loket json
    public function getruang($id)
    {
        if ($id == "Rawat Inap") {
            $ruang = DB::table('kamar_rawat')
            ->select('nama_ruangan')
            ->groupBy('nama_ruangan')
            ->get()
            ->toArray();
        } else {
            $ruang = "";
        }
        
        return \response()->json($ruang);
    }

    public function getkelas($id)
    {
        $kelas = kamar_rawat::where('nama_ruangan',$id)->get();
        
        return response()->json($kelas);
    }
}
