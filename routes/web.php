<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\LandingController;
use App\Models\Ekskul;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminview', [LandingController::class, 'admin'])->name('landing.admin');
Route::get('/ekskulview', [LandingController::class, 'ekskul'])->name('landing.ekskul');
Route::get('/siswaview', [LandingController::class, 'siswa'])->name('landing.siswa');
Route::get('/home', [AdminController::class, 'home'])->name('home');

Route::prefix("siswa")->group(function () {
    Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('store', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::post('update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');  
});

Route::prefix("ekskul")->group(function () {
    Route::get('/', [EkskulController::class, 'index'])->name('ekskul.index');
    Route::get('create', [EkskulController::class, 'create'])->name('ekskul.create');
    Route::post('store', [EkskulController::class, 'store'])->name('ekskul.store');
    Route::get('edit/{id}', [EkskulController::class, 'edit'])->name('ekskul.edit');
    Route::post('update/{id}', [EkskulController::class, 'update'])->name('ekskul.update');
    Route::delete('destroy/{id}', [EkskulController::class, 'destroy'])->name('ekskul.destroy');
});

Route::prefix("admin")->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('update/{id}', [AdminController::class, 'update'])->name('admin.update');

    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('updateprofile', [AdminController::class, 'updateprofile'])->name('admin.updateprofile');

    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/ceklogin', [AdminController::class, 'ceklogin'])->name('admin.ceklogin');    
});

Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');