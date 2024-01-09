<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kamar_rawat;
use Illuminate\Support\Facades\Redirect;

class KamarRawatController extends Controller
{
   
    public function index()
    {
        $kamar = kamar_rawat::all();

        return view('admin.kamar_rawat.index', compact('kamar'));
    }

    
    public function create()
    {
        return view('admin.kamar_rawat.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'fasilitas' => 'required',
            'kelas' => 'required',
        ],
            [
                'nama_ruangan.required' => 'Nama Ruangan tidak boleh kosong',
                'fasilitas.required' => 'fasilitas tidak boleh kosong',
                'kelas.required' => 'kelas tidak boleh kosong',
                
            ],  
        );

        $data = new kamar_rawat();

        $data->nama_ruangan = $request->input('nama_ruangan');
        $data->fasilitas = $request->input('fasilitas');
        $data->isi = $request->input('isi');
        $data->kosong = $request->input('kosong');
        $data->jumlah_kamar = $request->input('jumlah_kamar');
        $data->kelas = $request->input('kelas');
        $data->save();

        if ($data->save()){
            return redirect('/kamar-rawat')->with('success', 'saved successfully');
        }else {
            return Redirect('/kamar-rawat')->with('gagal', 'failed to save');
        }



    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $data = kamar_rawat::find($id);
        
        return view('admin.kamar_rawat.edit', compact('data'));
    }

    
    public function update(Request $request)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'fasilitas' => 'required',
            'kelas' => 'required',
        ],
            [
                'nama_ruangan.required' => 'Nama Ruangan tidak boleh kosong',
                'fasilitas.required' => 'fasilitas tidak boleh kosong',
                'kelas.required' => 'kelas tidak boleh kosong',
                
            ],  
        );

        $data = kamar_rawat::find($request['id']);

        $data->nama_ruangan = $request->input('nama_ruangan');
        $data->fasilitas = $request->input('fasilitas');
        $data->isi = $request->input('isi');
        $data->kosong = $request->input('kosong');
        $data->jumlah_kamar = $request->input('jumlah_kamar');
        $data->kelas = $request->input('kelas');
        $data->save();

        if ($data->save()){
            return redirect('/kamar-rawat')->with('success', 'updated successfully');
        }else {
            return Redirect('/kamar-rawat')->with('gagal', 'failed to update');
        }
    }

    
    public function destroy(string $id)
    {
        $data = kamar_rawat::find($id);
        if ($data->delete()) {
            return redirect('/jadwal-dokter')->with('success', 'This data has been successfully deleted');
        } else {
            return back()->with(['gagal', 'Failed to delete']);
        }
    }
}
