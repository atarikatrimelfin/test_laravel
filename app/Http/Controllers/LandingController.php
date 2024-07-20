<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ekskul;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function admin(){
        $admin = Admin::all();
        return view('landing.admin', compact('admin'));
    }
    
    public function siswa(){
        $siswa = Siswa::all();
        return view('landing.siswa', compact('siswa'));
    }

    public function ekskul(){
        $ekskul = Ekskul::all();
        return view('landing.ekskul', compact('ekskul'));
    }
}
