<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\Siswa;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        $ekskul = Ekskul::all();
        return view('ekskul.index', compact('ekskul', 'siswa'));
    }
    
    public function create(){
        $siswa = Siswa::all();

        return view('ekskul.create', compact('siswa'));
    }

    public function store(Request $request){
        $request->validate([
            'id_siswa' => 'required',
            'nama_ekskul' => 'required',
            'tahun_mulai' => 'required'
        ]);
        Ekskul::create($request->all());
        return redirect('/ekskul')->with('success', 'ekskul berhasil ditambahkan.');
    }

    public function edit($id){
        $ekskul = Ekskul::find($id);
        $siswa = Siswa::all();
        return view('ekskul.edit', compact('ekskul', 'siswa'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'id_siswa' => 'required',
            'nama_ekskul' => 'required',
            'tahun_mulai' => 'required'
        ]);

        $ekskul = Ekskul::find($id);
        $ekskul->update($request->all());

        return redirect('/ekskul')->with('success', 'Data ekskul berhasil diubah.');
    }

    public function destroy($id){
        Ekskul::find($id)->delete();
        return redirect('/ekskul')->with('success', 'Data berhasil dihapus.');
    }
}
