<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\daftar_pasien;
use App\Models\konfirmasi_pasien;
use App\Models\loket_option;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class DaftarPasienControlleer extends Controller
{
    public function index(){
        $daftar = konfirmasi_pasien::all();

        return view('admin.data_pasien.index', compact('daftar'));
    }

    public function edit(string $id)
    {
        $data = konfirmasi_pasien::find($id);
        
        return view('admin.data_pasien.edit', compact('data'));
    }

    
    public function update(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama_pasien' => 'required',
        ],
            [
                'nik.required' => 'NIK tidak boleh Kosong',
                'nama_pasien.required' => 'Nama Pasien tidak boleh kosong',
                
            ],  
        );

        $data = konfirmasi_pasien::find($request['id']);
        
        $data->no_registrasi    = $request->input('no_registrasi');
        $data->no_rekam_medis   = $request->input('no_rekam_medis');
        $data->no_antrian       = $request->input('no_antrian');
        $data->loket            = $request->input('loket');
        $data->jenis_pasien     = $request->input('jenis_pasien');
        $data->nama_pasien      = $request->input('nama_pasien');
        $data->nik              = $request->input('nik');
        $data->tempat_lahir     = $request->input('tempat_lahir');
        $data->tgl_lahir        = $request->input('tgl_lahir');
        $data->no_hp            = $request->input('no_hp');
        $data->cara_bayar       = $request->input('cara_bayar');
        $data->tgl_kunjungan    = $request->input('tgl_kunjungan');
        $data->poli_tujuan      = $request->input('poli_tujuan');
        $data->dokter           = $request->input('dokter');

        if ($data->save()){
            return redirect('/data-pasien')->with('success', 'Data berhasil diedit');
        }else {
            return Redirect('/data-pasien')->with('gagal', 'tambah data gagal');
        }
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
        ]);



        $ambilnik = $request->nik;
        $reqnik = daftar_pasien::all()->where('nik',$ambilnik)->first();
        // dd($reqnik);

        if( $reqnik == null ) {
            return back()->withErrors([
                'nik' => 'NIK anda belum terdaftar pilih pasien baru',
            ]);
        }else {
            if(empty($request->session()->get('data'))){
                $data = new daftar_pasien();
                $data->fill($validatedData);
                $request->session()->put('data', $data);
                $request->session()->put('reqnik', $reqnik);
            }else{
                $data = $request->session()->get('data');
                $data->fill($validatedData);
                $request->session()->put('data', $data);
                $request->session()->put('reqnik', $reqnik);
            }
    
            return redirect('pendaftaran-pasien/create-step-two');
        }
        
    }

    public function createStepTwoBaru(Request $request)
    {
        $data = $request->session()->get('data');

        return view('admin.daftar_pasien.create_step_two_baru',compact('data'));
    }

    public function createStepTwo(Request $request)
    {
        $data = $request->session()->get('data');
        $reqnik = $request->session()->get('reqnik');
        // $loket = loket_option::all()->groupBy('loket');
        $opsi = loket_option::all();
        
        return view('admin.daftar_pasien.create_step_two',compact('data','reqnik','opsi'));
    }

    //get data loket json
    public function getLoket($id)
    {
        $poli = loket_option::where('kode_loket',$id)->get();
        
        return response()->json($poli);
    }

    

    public function postCreateStepTwo(Request $request)
    {
        $now = Carbon::now()->setTimezone('Asia/Makassar');
        $cek = daftar_pasien::count();
        $d = $now->toDateString();

        //nomor registrasi
        if ( $cek == 0 ){
            $urut = 1001;
            $thnbln = $now->year . $now->month . $now->day;
            $nomer = $thnbln . $urut;
        } else {
            $ambil = daftar_pasien::all()->last();
            $thnbln = $now->year . $now->month . $now->day;
            $nomer = $ambil->no_registrasi + 1;
        }

        //nomor antrian
        $tgl = daftar_pasien::all()->last();
        $kunjungan = $request->tgl_kunjungan;

        if ( $tgl == null ){
            $uantri = '1';
        } elseif ($tgl != null) {
            // $ambiltgl = $tgl->tgl_kunjungan;
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
            // dd($uantri);
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
        $data->konfirmasi = 'belum dipanggil';

        $nik = $data->nik;
        $cekisi = konfirmasi_pasien::where('nik',$nik)->count();

        if ($cekisi == 0) {
            $pasien = new konfirmasi_pasien();
            $pasien->no_registrasi  = $data->no_registrasi;
            $pasien->no_antrian     = $data->no_antrian;
            $pasien->loket          = $data->loket;
            $pasien->jenis_pasien   = $data->jenis_pasien;
            $pasien->nama_pasien    = $data->nama_pasien;
            $pasien->nik            = $data->nik;
            $pasien->no_rekam_medis = $data->no_rekam_medis;
            $pasien->tempat_lahir   = $data->tempat_lahir;
            $pasien->tgl_lahir      = $data->tgl_lahir;
            $pasien->no_hp          = $data->no_hp;
            $pasien->cara_bayar     = $data->cara_bayar;
            $pasien->tgl_kunjungan  = $data->tgl_kunjungan;
            $pasien->poli_tujuan    = $data->poli_tujuan;
            $pasien->dokter         = $data->dokter;
            $pasien->konfirmasi     = $data->konfirmasi;
            $pasien->save();
        }
        else {
            $pasien = konfirmasi_pasien::where('nik',$nik)->first();
            $pasien->no_registrasi  = $data->no_registrasi;
            $pasien->no_antrian     = $data->no_antrian;
            $pasien->loket          = $data->loket;
            $pasien->jenis_pasien   = $data->jenis_pasien;
            $pasien->nama_pasien    = $data->nama_pasien;
            $pasien->nik            = $data->nik;
            $pasien->no_rekam_medis = $data->no_rekam_medis;
            $pasien->tempat_lahir   = $data->tempat_lahir;
            $pasien->tgl_lahir      = $data->tgl_lahir;
            $pasien->no_hp          = $data->no_hp;
            $pasien->cara_bayar     = $data->cara_bayar;
            $pasien->tgl_kunjungan  = $data->tgl_kunjungan;
            $pasien->poli_tujuan    = $data->poli_tujuan;
            $pasien->dokter         = $data->dokter;
            $pasien->konfirmasi     = $data->konfirmasi;
            $pasien->save();
        }

        // dd($data);
        $data->save();
        $request->session()->forget('data');

        return redirect('pendaftaran-pasien/cek');
    }    

}