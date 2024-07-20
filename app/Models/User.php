<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_depan', 'nama_belakang', 'email', 'tanggal_lahir', 'jenis_kelamin', 'password'
    ];
    protected $hidden = 'password';
}
