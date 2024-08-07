<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('pengumuman')->insert([
            'judul' => 'Jaga Kedaulatan Negara di Era Digital, Prajurit TNI Pelajari Pilar Literasi Digital',
            'deskripsi' => 'eran Tentara Negara Indonesia (TNI) dalam transformasi digital adalah secara aktif memberikan dukungan dan menjaga kedaulatan negara di tengah kehidupan digital yang menjadi sumber ancaman. Mendukung hal tersebut, para prajurit TNI dibekali pilar literasi digital. “Untuk bisa menjaga kedaulatan negara di tengah era digital, prajurit TNI perlu memahami empat pilar literasi digital (digital culture, digital skill, digital ethics, dan digital safety),” ujar Dosen Fasilkom Universitas Indonesia, Sofian Lusa, pada acara Literasi Digital kepada Prajurit TNI bertema “TNI Makin Cakap Digital”',
            'gambar' => '950825.jpg',
            'tanggal' => '2024-08-07',
        ]);

        \DB::table('pengumuman')->insert([
            'judul' => 'Tesla Recall 1,68 Juta Unit Mobil Listrik',
            'deskripsi' => 'Recall ini berdampak pada beberapa kendaraan Model S dan Model X yang diimpor, serta mobil Model 3 dan Model Y yang dibuat di China antara 15 Oktober 2020 hingga 17 Juli 2024. Dalam pemberitahuan recall tersebut, disebutkan bagasi yang tidak terkunci dapat terbuka saat mengemudi, yang berpotensi menghalangi pandangan pengemudi. Tidak disebutkan apakah kejadian ini pernah terjadi pada mobil Tesla sebelumnya. China sendiri adalah pasar dan basis produksi utama bagi Tesla. Namun, di pasar China, Tesla menghadapi persaingan ketat dari produsen kendaraan listrik lokal. ',
            'gambar' => '123123.png',
            'tanggal' => '2024-08-07',
        ]);
    }
}
