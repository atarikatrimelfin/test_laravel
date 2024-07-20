<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }
    
    public function create(){
        return view('siswa.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama_depan' => 'required',
        'nama_belakang' => 'required',
        'no_hp' => 'required',
        'nis' => 'required',
        'alamat' => 'required',
        'jenis_kelamin' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,svg'
    ]);

    $data = $request->all();

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $filename = time() . '_' . $foto->getClientOriginalName();
        $path = 'foto/' . $filename;

        $foto->storeAs('public/foto', $filename);

        $data['foto'] = $filename;
        } else {
        $data['foto'] = null;
        }
        
        Siswa::create($data);
        
        return redirect('/siswa')->with('success', 'Siswa berhasil ditambahkan.');
    }


    public function edit($id){
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'no_hp' => 'required',
        'nis' => 'required',
        'alamat' => 'required',
        'jenis_kelamin' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,svg'
        ]);

        $siswa = Siswa::find($id);

    $siswa->nama_depan = $request->nama_depan;
    $siswa->nama_belakang = $request->nama_belakang;
    $siswa->no_hp = $request->no_hp;
    $siswa->nis = $request->nis;
    $siswa->alamat = $request->alamat;
    $siswa->jenis_kelamin = $request->jenis_kelamin;

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $filename = time() . '_' . $foto->getClientOriginalName();
        $path = 'foto/' . $filename;

        if ($siswa->foto) {
            Storage::disk('public')->delete('foto/' . $siswa->foto);
        }

        Storage::disk('public')->put($path, file_get_contents($foto));
        $siswa->foto = $filename;
    }

    $siswa->save();
    
    return redirect('/siswa')->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy($id){
        Siswa::find($id)->delete();
        return redirect('/siswa')->with('success', 'Data berhasil dihapus.');
    }
}
