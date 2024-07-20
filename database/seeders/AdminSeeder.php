<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create(['id' => 1, 'nama_depan' => 'Atarika', 'nama_belakang' => 'Trimelfi Nofisa', 'email'=>'atarikatrimelfin@gmail.com', 'tanggal_lahir'=>'2002-05-15', 'jenis_kelamin'=>'Perempuan', 'password'=> Hash::make('test2024')]);
    }
}
