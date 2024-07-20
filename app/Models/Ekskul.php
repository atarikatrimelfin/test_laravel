<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'ekskul';
     protected $primaryKey = 'id';
     protected $fillable = ['nama_ekskul', 'id_siswa', 'tahun_mulai'];

     public function siswa()
    {
        return $this->belongsTo(Siswa::class,  'id_siswa');
    }
}
