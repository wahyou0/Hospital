<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\user;

class AuthController extends Controller
{
    
    public function index()
    {
        if($user = Auth::user()){
            if ($user->level == '1') {
                return redirect()->intended('home');
            } elseif ($user->level == '2') {
                return redirect()->intended('jadwal-dokter');
            }
        }

        return view('login');
    }

    public function proseslogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]    
        );

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // dd($user->level);
            if ($user->level == '1') {
                return redirect()->intended('home');
            } elseif ($user->level == '2') {
                return redirect()->intended('kegiatan');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'username atau password anda salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(Request $request) 
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'image' => 'mimes:png,jpg,jpeg|image|max:10048',
            'password' => 'required|min:6',
        ],
            [
                'name.required' => 'Nama Lengkap tidak boleh kosong',
                'username.required' => 'Username tidak boleh kosong',
                'username.unique' => 'Username sudah terdaftar gunakan username yang lain',  
                'password.required' => 'password tidak boleh kosong',
                'password.min' => 'password minimal 6 karakter',
                
            ],  
        );

        if($request->hasFile('image')){
            $path = $request->file('image')->store('uploads');
        }else{
            $path = '';
        }

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'image' => $path,
            'password' => Hash::make($request['password']),
            'level' => $request['level'],
        ]);
        return redirect('/home')->with('succes', 'Registrasi Admin Berhasil');
    }

}
