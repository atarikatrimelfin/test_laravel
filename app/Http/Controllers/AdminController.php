<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin/login');
    }
    public function ceklogin(Request $request){
        if(
            !Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])
        ){
            return redirect('admin/login')->with('error', 'Email atau password salah.');
        } else {
            return redirect ('/home');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function home(){
        return view('home');
    }
    public function index(){
        $admin = Admin::all();
        return view('admin.index', compact('admin'));
    }

    public function edit($id){
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'password' => ''
        ]);
        
        $admin = Admin::findOrFail($id);

        $admin->nama_depan = $request->nama_depan;
        $admin->nama_belakang = $request->nama_belakang;
        $admin->email = $request->email;
        $admin->tanggal_lahir = $request->tanggal_lahir;
        $admin->jenis_kelamin = $request->jenis_kelamin;

        if ($request->has('password') && $request->password != '') {
            $request->validate([
                'password' => '',
            ]);
            $admin->password = bcrypt($request->password);
        }

        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Data admin berhasil diubah');
    }

    public function profile(){
        $admin = Admin::all();
        return view('admin.profile', compact('admin'));
    }

    public function updateprofile(Request $request, $id){
        $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'password' => ''
        ]);
        
        $admin = Admin::findOrFail($id);

        $admin->nama_depan = $request->nama_depan;
        $admin->nama_belakang = $request->nama_belakang;
        $admin->email = $request->email;
        $admin->tanggal_lahir = $request->tanggal_lahir;
        $admin->jenis_kelamin = $request->jenis_kelamin;

        if ($request->has('password') && $request->password != '') {
            $request->validate([
                'password' => '',
            ]);
            $admin->password = bcrypt($request->password);
        }

        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Data admin berhasil diubah');
    }
}
