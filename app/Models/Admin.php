<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

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
