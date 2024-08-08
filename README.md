# Project LSP

## Developer : 
-Nama = Steven Yesua Sutanto
-NPM = 2024250016
-Prodi = Informatika
-Bidang = Pengembang Web

Spesifikasi Hardware:
CPU = I5-1140H @2.7 GHz
RAM = 16 GB DDR4
GPU = NVIDIA GeForce RTX 3050
ROM = 512 GB SSD + 1 TB SSD

Spesifikasi Aplikasi
Framework = Laravel
Css = Tailwind
Library = Flowbite & Datatables
Database = MySQL(phpmyadmin)
Software = Visual Studio Code
OS = Windows 11

beberapa refrensi:

navbar :
https://flowbite.com/docs/components/navbar/

carousel :
https://flowbite.com/docs/components/carousel/

Jumlah Tabel = 4

Tabel Role
-id
-nama

Tabel User
-id
-nama
-email
-password
-asal_sekolah
-no_telp
-tanggal_lahir
-bukti
-status
-role_id(foreignkey)
-foto

Tabel Mahasiswa
-id
-user_id(foreignkey)
-jenis_kelamin
-jurusan
-waktu_kuliah
-agama
-alamat
-tempat_lahir
-hasil_test
-status

Tabel Pengumuman
-id
-judul
-deskripsi
-gambar
-tanggal

Alur Program :
1. Register
2. Validasi user oleh admin
3. Login
4. Daftar Mahasiswa
5. Validasi mahasiswa oleh admin
6. Admin buat pengumuman
7. Mahasiswa lihat pengumuman

Fitur Aplikasi
1. Bisa Login
2. Bisa Validasi
3. Bisa Register
4. Bisa Cek Profil
5. Bisa Input Tampil Gambar
6. Ada role permission
7. Bisa CRUD Pengumuman

Beberapa penggunaan :
1. Repository dari Github
2. Framework laravel
3. Laravel Breeze sebagai Authentication
4. Policy sebagai Authorization
5. Beberapa library css dan js : tailwind, flowbite, dan datatables

Guide

Install Laravel & Node.js

//buat project
composer create-project laravel/laravel SimponiMahasiswa

//push database
php artisan migrate

//push value database
php artisan db:seed

//run server laravel
php artisan serve

//install node.js
npm install

//run node.js
npm run dev

Install Tailwind compare with laravel : 

1. npm install -D tailwindcss postcss autoprefixer
2. npx tailwindcss init -p
3. edit tailwind.config.js : 
  /** @type {import('tailwindcss').Config} */
  export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
4. app.cs : 
  @tailwind base;
  @tailwind components;
  @tailwind utilities;
5. npm install @tailwindcss/forms
6. @vite('resources/css/app.css')

Install Flowbite Library
1.npm install flowbite
2. add plugin and content at tailwind.config.js

 module.exports = {

    plugins: [
        require('flowbite/plugin')
    ]

}

module.exports = {

    content: [
        "./node_modules/flowbite/**/*.js"
    ]

}

3. import java script
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>

Install datatables :
1. download datatables.js
2. download datatables.css
3. download jquery.min.js




   
