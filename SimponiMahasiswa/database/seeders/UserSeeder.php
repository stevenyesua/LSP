<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'nama' => 'Steven Yesua',
            'email' => 'steven@gmail.com',
            'password' => \Hash::make('steven123'), 
            'asal_sekolah' => 'SMA Ignatius Global School',
            'no_telp' => '082181034762',
            'tanggal_lahir' => '2002-12-29',
            'bukti' => 'buktisteven.jpg',
            'status' => 'aktif',
            'role_id' => 1,
            'foto' => 'stevenpp.png',
        ]);

        \DB::table('users')->insert([
            'nama' => 'Felix Kurniawan',
            'email' => 'felix@gmail.com',
            'password' => \Hash::make('felix123'), 
            'asal_sekolah' => 'SMA Xaverius 3',
            'no_telp' => '08123213123',
            'tanggal_lahir' => '2000-12-29',
            'bukti' => 'buktifelix.jpg',
            'status' => 'pending',
            'role_id' => 2,
            'foto' => 'felixpp.jpg',
        ]);
    }
}
