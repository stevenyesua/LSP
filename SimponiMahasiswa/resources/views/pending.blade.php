@extends('layouts.main')
@section('content')
<div class="container mt-32 w-max px-80 ml-16">
    <div class="box-about flex bg-white">
        <div class="box-title bg-gray-900 py-8 px-8 text-white font-semibold text-xl">
            Pemberitahuan Informasi Tentang Akun
        </div>
        <div class="box-deskripsi p-8 text-sm">
            <div class="font-semibold">
                Terimakasih telah mendaftarkan akun anda.:
            </div>
            <div class="mt-4">
                Selanjutnya akun anda akan melalui proses tahap verifikasi oleh Admin selama 1x24 jam. <br>
                Jika akun tidak dapat di gunakan selama lebih dari 1x24 jam, silahkan hubungi nomor admin di bawah ini : <br>
                082181034762 (Steven)
            </div>
            <div class="font-semibold mt-4">
                Ketentuan:
            </div>
            <div class="mt-4">
                1. Pendaftar baru harus melengkapi semua data yang di minta sesuai dengan data asli. <br>
                2. Pendaftar wajib melampirkan bukti pembayaran yang valid. <br>
                3. Pendaftar wajib menunggu waktu selama 1x24 jam untuk proses pengaktifan akun.
            </div>
        </div>
    </div>
</div>

@endsection