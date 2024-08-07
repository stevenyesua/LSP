LSP
Developer : 
Nama = Steven Yesua Sutanto
NPM = 2024250016
Prodi = Informatika
Bidang = Pengembang Web

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

Beberapa penggunaan :
1. Repository dari Github
2. Framework laravel
3. Laravel Breeze sebagai Authentication
4. Policy sebagai Authorization
5. Beberapa library css dan js : tailwind, flowbite, dan datatables


   
