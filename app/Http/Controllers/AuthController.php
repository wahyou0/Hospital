<?php

namespace App\Http\Controllers;

use App\Models\loket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    
    public function index()
    {
        if($user = Auth::user()){
            if ($user->level == '1') {
                return redirect()->intended('home');
            } elseif ($user->level == '2') {
                return redirect()->intended('home-dokter');
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
                'username.required' => 'Username cannot be empty',
                'password.required' => 'password cannot be empty',
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
                return redirect()->intended('home-dokter');
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
        return redirect('/');
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
                'name.required' => 'Full Name cannot be empty',
                'username.required' => 'Username cannot be empty',
                'username.unique' => 'Username already registered, use another username',  
                'password.required' => 'password cannot be empty',
                'password.min' => 'Password must be at least 6 characters',
                
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

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // dd($user->level);
            if ($user->level == '1') {
                return redirect()->intended('home');
            } elseif ($user->level == '2') {
                return redirect()->intended('home-dokter');
            }

            return redirect()->intended('/');
        }
    }

    public function registerDokter()
    {
        $data = loket::all();
        return view('admin.register_dokter', compact('data'));
    }

    public function createDokter(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'spesialis' => 'required',
            'username' => 'required|unique:users,username',
            'image' => 'mimes:png,jpg,jpeg|image|max:10048',
            'password' => 'required|min:6',
        ],
            [
                'name.required' => 'Full Name cannot be empty',
                'spesialis.required' => 'Spesialis tidak boleh kosong',
                'username.required' => 'Username cannot be empty',
                'username.unique' => 'Username already registered, use another username',  
                'password.required' => 'password cannot be empty',
                'password.min' => 'Password must be at least 6 characters',
                
            ],  
        );

        if($request->hasFile('image')){
            $path = $request->file('image')->store('uploads');
        }else{
            $path = '';
        }

        dd($request);

        User::create([
            'name' => $request['name'],
            'spesialis' => $request['spesialis'],
            'username' => $request['username'],
            'image' => $path,
            'password' => Hash::make($request['password']),
            'level' => $request['level'],
        ]);

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // dd($user->level);
            if ($user->level == '1') {
                return redirect()->intended('home');
            } elseif ($user->level == '2') {
                return redirect()->intended('home-dokter');
            }

            return redirect()->intended('/');
        }
    }

    public function list()
    {
        $list = User::all();

        return view('admin.auth.index', compact('list'));
    }

    public function edit(string $id)
    {
        $data = User::find($id);
        $loket = loket::all();

        return view('admin.auth.edit', compact('loket','data'));
    }

    public function update(Request $request)
    {
        dd($request);
    }

    public function destroy(string $id)
    {
        $data = User::find($id);
        $pathfoto = $data->image;

        if ($pathfoto != null || $pathfoto != '') {
            Storage::delete($pathfoto);
        }
        if ($data->delete()) {
            return redirect('/auth')->with('success', 'This data has been successfully deleted');
        } else {
            return back()->with(['gagal', 'Failed to delete']);
        }
    }

}
