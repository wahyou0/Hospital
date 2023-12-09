<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jadwal_dokter;

class JadwalDokterController extends Controller
{
    
    public function index()
    {
        $jadwal = jadwal_dokter::all();

        return view('admin.jadwal_dokter.index', compact('jadwal'));
    }

    
    public function create()
    {
        return view('admin.jadwal_dokter.create');
    }

    
    public function store(Request $request)
    {
        $model = $request->all();
        // dd($model);

        jadwal_dokter::create($model);
        return redirect('/jadwal-dokter')->with('success', 'Jadwal dokter berhsasil ditambah');
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        $data = jadwal_dokter::find($id);
        
        return view('admin.jadwal_dokter.edit', compact('data'));
    }

    
    public function update(Request $request)
    {
        $input = $request->all();

        // dd($input);

        if (jadwal_dokter::find($input['id'])->update($input)){
            return Redirect('jadwal-dokter')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('jadwal-dokter')->with('gagal', 'Edit Data Gagal');
        }
    }

    
    public function destroy(string $id)
    {
        $data = jadwal_dokter::find($id);
        if ($data->delete()) {
            return redirect('/jadwal-dokter')->with('success', 'Data Telah di Hapus');
        } else {
            return back()->with(['gagal', 'Hapus Data Gagal']);
        }
    }
}
