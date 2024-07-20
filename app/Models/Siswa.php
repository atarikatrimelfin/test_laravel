<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'siswa';
     protected $primaryKey = 'id';
     protected $fillable = [
        'nama_depan', 'nama_belakang', 'no_hp', 'nis', 'alamat', 'jenis_kelamin', 'foto'
    ];

    public function ekskul()
    {
        return $this->hasMany(Ekskul::class, 'id');
    }
}
