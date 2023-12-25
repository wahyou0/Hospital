<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jadwal_dokter;
use App\Models\loket;
use App\Models\User;
use App\Models\loket_option;

class JadwalDokterController extends Controller
{
    
    public function index()
    {
        $jadwal = jadwal_dokter::all();

        return view('admin.jadwal_dokter.index', compact('jadwal'));
    }

    
    public function create()
    {
        $data = loket::all();
        $dokter = user::all()->where('level','2');
        // dd($dokter);
        return view('admin.jadwal_dokter.create', compact('data','dokter'));
    }

    
    public function store(Request $request)
    {
        $model = $request->all();

        // $data = new loket_option();
        // $data->poli_tujuan = $request->spesialis;
        // $data->save();
        // dd($data);

        jadwal_dokter::create($model);
        return redirect('/jadwal-dokter')->with('success', 'Jadwal dokter berhsasil ditambah');
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        $data = jadwal_dokter::find($id);
        $loket = loket::all();
        $dokter = user::all()->where('level','2');
        
        return view('admin.jadwal_dokter.edit', compact('data','loket','dokter'));
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
