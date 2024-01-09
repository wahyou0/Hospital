<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\daftar_pasien;
use Illuminate\Http\Request;

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
        // dd($input);

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
}
