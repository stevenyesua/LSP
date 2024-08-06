<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('role')->insert([
            'nama' => 'Admin'
        ]);

        \DB::table('role')->insert([
            'nama' => 'Calon Mahasiswa'
        ]);

        \DB::table('role')->insert([
            'nama' => 'Mahasiswa Baru'
        ]);
    }
}
