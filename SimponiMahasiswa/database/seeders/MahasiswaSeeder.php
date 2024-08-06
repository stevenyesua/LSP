<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('mahasiswa')->insert([
            'user_id' => '1',
            'jenis_kelamin' => 'L',
            'jurusan' => 'Informatika',
            'waktu_kuliah' => 'pagi',
            'agama' => 'Kristen',
            'alamat' => 'Jl. Perintis Kemerdekaan',
            'tempat_lahir' => 'Palembang',
            'hasil_test' => 'kosong',
            'status' => 'aktif',
        ]);

        \DB::table('mahasiswa')->insert([
            'user_id' => '2',
            'jenis_kelamin' => 'L',
            'jurusan' => 'Informatika',
            'waktu_kuliah' => 'pagi',
            'agama' => 'Kristen',
            'alamat' => 'Jl. Cinde',
            'tempat_lahir' => 'Jambi',
            'hasil_test' => 'kosong',
            'status' => 'pending',
        ]);
    }
}
