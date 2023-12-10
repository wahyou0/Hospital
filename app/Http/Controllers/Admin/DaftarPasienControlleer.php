<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\daftar_pasien;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DaftarPasienControlleer extends Controller
{
    public function index(){
        $daftar = daftar_pasien::all();

        return view('admin.data_pasien.index', compact('daftar'));
    }

    public function cek()
    {   
        return view('admin.daftar_pasien.index');
    }

    public function createStepOneBaru(Request $request)
    {
        $data = $request->session()->get('data');

        return view('admin.daftar_pasien.create_step_one_baru',compact('data'));
    }

    public function postCreateStepOneBaru(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'jenis_pasien' => 'required',
            'nama_pasien' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
        ]);

        // dd($validatedData);

        if(empty($request->session()->get('data'))){
            $data = new daftar_pasien();
            $data->fill($validatedData);
            $request->session()->put('data', $data);
        }else{
            $data = $request->session()->get('data');
            $data->fill($validatedData);
            $request->session()->put('data', $data);
        }
        // dd($data);

        return redirect('pendaftaran-pasien/create-step-two-baru');
    }

    public function createStepOneLama(Request $request)
    {
        $data = $request->session()->get('data');

        return view('admin.daftar_pasien.create_step_one',compact('data'));
    }

    public function postCreateStepOneLama(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'jenis_pasien' => 'required',
            'nik' => 'required',
            'tgl_lahir' => 'required',
        ]);

        if(empty($request->session()->get('data'))){
            $data = new daftar_pasien();
            $data->fill($validatedData);
            $request->session()->put('data', $data);
        }else{
            $data = $request->session()->get('data');
            $data->fill($validatedData);
            $request->session()->put('data', $data);
        }
        // dd($data);

        return redirect('pendaftaran-pasien/create-step-two');
    }

    public function createStepTwoBaru(Request $request)
    {
        $data = $request->session()->get('data');

        return view('admin.daftar_pasien.create_step_two_baru',compact('data'));
    }

    public function createStepTwo(Request $request)
    {
        $data = $request->session()->get('data');

        $ambilnik = $data->nik;
        $ceknik = daftar_pasien::all()->where('nik',$ambilnik)->first();
        // dd($ceknik);

        return view('admin.daftar_pasien.create_step_two',compact('data','ceknik'));
    }

    public function postCreateStepTwo(Request $request)
    {
        $now = Carbon::now()->setTimezone('Asia/Makassar');
        $cek = daftar_pasien::count();
        $d = $now->toDateString();
        // dd($a);
        if ( $cek == 0 ){
            $urut = 1001;
            $thnbln = $now->year . $now->month . $now->day;
            $nomer = $thnbln . $urut;
        } else {
            $ambil = daftar_pasien::all()->last();
            $thnbln = $now->year . $now->month . $now->day;
            $nomer = $ambil->no_registrasi + 1;
        }

        
        // $cektgl = daftar_pasien::where()
        $tgl = daftar_pasien::all()->last();
        $kunjungan = $request->tgl_kunjungan;
        // $ambiltgl = $tgl->tgl_kunjungan;
        // dd($tgl);
        if ( $tgl == null ){
            $uantri = '1';
        } elseif ($tgl != null) {
            $ambiltgl = $tgl->tgl_kunjungan;
            if ($kunjungan != $d ) {
                $cekdata = daftar_pasien::all()->where('tgl_kunjungan',$kunjungan)->last();
                if ($cekdata != null) {
                    $uantri = (int)substr($cekdata->no_antrian, -4) + 1;
                } else {
                    $uantri = '1';
                }
            } else {
                $uantri = (int)substr($tgl->no_antrian, -4) + 1;
            }
        }

    	$validatedData = $request->validate([
            'loket' => 'required',
            'nama_pasien' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
            'cara_bayar' => 'required',
            'tgl_kunjungan' => 'required',
            'poli_tujuan' => 'required', //bisa kosong
            'dokter' => 'required',
        ]);

        $data = $request->session()->get('data');
        $data->fill($validatedData);
        // $data->dokter = $request->dokter;
        $data->no_antrian = $uantri;
        $data->no_registrasi = $nomer;
        $request->session()->put('data', $data);
        // dd($data);

        return redirect('pendaftaran-pasien/create-step-three');
    }

    public function createStepThree(Request $request)
    {
        $data = $request->session()->get('data');

        return view('admin.daftar_pasien.create_step_three',compact('data'));
    }

    public function view_pdf(Request $request)
    {
        $data = $request->session()->get('data');
     
        $pdf = Pdf::loadView('pdf', ['data' => $data]);
     
        return $pdf->download('antrian.pdf'); 

    }

    public function postCreateStepThree(Request $request)
    {
    	$data = $request->session()->get('data');

         
        // dd($data);
        $data->save();
        $request->session()->forget('data');

        return view('admin.daftar_pasien.index');
    }

    
    
}
