@extends('layouts.main')
@section('content')

@if($is_registered == false)
<div class="container mt-16">
    <div class="box flex">
        <div class="box-penjelasan bg-gray-900 w-96 text-white p-8">
            <h1 class="font-bold text-lg">Beberapa ketentuan</h1>
            <div class="mt-4">
                Pendaftaran mahasiswa baru telah dibuka silahkan daftarkan diri anda di Universitas MDP.
            </div>
            <div class="mt-4 font-bold">
                Syarat Pendaftaran :
            </div>
            <div class="mt-4">
                Lulus dan tamat SMA/SMK
                Mengikuti dan lulus tes tertulis, wawancara dan tes kesehatan
            </div>
            <div class="mt-4 font-bold">
                Ketentuan lainnya :
            </div>
            <div class="mt-4">
                Jika calon mahasiswa TIDAK melakukan registrasi ulang sesuai jadwal yang telah ditentukan, maka dianggap mengundurkan diri dari program PMB.

            </div>
            <div class="mt-4 flex">
                <div class="font-bold mr-1">Note</div>
                <div class="font-bold mr-1">:</div>
                <div>hal-hal lain yang belum diatur, akan diatur kemudian.</div>
            </div>            
        </div>
        <div class="box-formulir bg-white w-96 p-8">
            <h1 class="font-bold text-lg">Formulir Pendaftaran</h1>
            <form method="POST" action="{{route('mahasiswa.store')}}"enctype="multipart/form-data">
            @csrf
                <div class="relative mt-4">
                    <input disabled value="{{Auth::user()->nama;}}"type="text" id="nama" class=" block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="nama" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nama Lengkap</label>
                </div>
                <div class="">
                    <h2 class="text-xs mt-2">Nama harus sesuai dengan ijazah atau rapor SMA/SMK</h2>
                </div>
                <div class="relative mt-4">
                    <select name="jenis_kelamin" id="jenis_kelamin" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                        <option disabled selected>Silahkan Memilih Jenis Kelamin</option>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <label for="jenis_kelamin" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Jenis Kelamin</label>
                    @error('jenis_kelamin')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mt-4">
                    <select name="jurusan" id="jurusan" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                        <option disabled selected>Silahkan Memilih Jurusan</option>
                        <option value="informatika">Informatika (S1)</option>
                        <option value="sistem-informasi">Sistem Informasi (S1)</option>
                        <option value="manajemen-informatika">Manajemen Informatika (D3)</option>
                        <option value="teknik-elektro">Teknik Elektro (S1)</option>
                        <option value="manajemen">Manejemen (S1)</option>
                        <option value="akuntansi">Akuntansi (S1)</option>
                    </select>
                    <label for="jurusan" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Program Studi</label>
                    @error('jurusan')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mt-4">
                    <select name="waktu_kuliah" id="waktu_kuliah" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                        <option disabled selected>Silahkan Memilih Waktu</option>
                        <option value="pagi">Pagi</option>
                        <option value="malam">Malam</option>
                    </select>
                    <label for="waktu_kuliah" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Waktu Kuliah</label>
                    @error('waktu_kuliah')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mt-4">
                    <input name="agama" type="text" id="agama" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="agama" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Agama</label>
                    @error('agama')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mt-4">
                    <input name="alamat" type="text" id="alamat" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="alamat" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
                    @error('alamat')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mt-4">
                    <input name="tempat_lahir" type="text" id="tempat_lahir" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="tempat_lahir" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Tempat Lahir</label>
                    @error('tempat_lahir')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mt-4">
                    <input name="hasil_test" type="file" id="hasil_test" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="hasil_test" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Hasil Test</label>
                    @error('hasil_test')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mt-4">
                    <button type="submit" name="submit" class="text-white bg-[#3b5998] w-full hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                        Daftar sebagai Mahasiswa
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@elseif($mahasiswa[0]->status == 'nonaktif')
<div class="container mt-32 w-max px-80 ml-16">
    <div class="box-about flex bg-white">
        <div class="box-title bg-gray-900 py-8 px-8 text-white font-semibold text-xl">
            Pemberitahuan Penolakan Tentang Pendaftaran Mahasiswa
        </div>
        <div class="box-deskripsi p-8 text-sm">
            <div class="font-semibold">
                Maaf anda telah di tolak menjadi mahasiswa di UMDP.:
            </div>
            <div class="mt-4">
                Penolakan terjadi karena tidak terpenuhnya salah satu atau lebih dari satu ketentuan di bawah <br>
                Jika ada pertanyaan yang berhubungan dengan pendaftaran mahasiswa , silahkan hubungi nomor admin di bawah ini : <br>
                082181034762 (Steven)
            </div>
            <div class="font-semibold mt-4">
                Ketentuan:
            </div>
            <div class="mt-4">
                1. Pendaftar baru harus melengkapi semua data yang di minta sesuai dengan data asli. <br>
                2. Pendaftar wajib melampirkan bukti hasil tes yang valid. <br>
                3. Pendaftar wajib menunggu waktu selama 1x24 jam untuk proses penerimaan mahasiswa.
            </div>
        </div>
    </div>
</div>
@else
<div class="container mt-32 w-max px-80 ml-16">
    <div class="box-about flex bg-white">
        <div class="box-title bg-gray-900 py-8 px-8 text-white font-semibold text-xl">
            Pemberitahuan Informasi Tentang Pendaftaran Mahasiswa
        </div>
        <div class="box-deskripsi p-8 text-sm">
            <div class="font-semibold">
                Terimakasih telah mendaftarkan menjadi mahasiswa di UMDP.:
            </div>
            <div class="mt-4">
                Selanjutnya akun anda akan melalui proses tahap verifikasi oleh Admin selama 1x24 jam. <br>
                Jika pendaftaran mahasiswa tidak dapat di gunakan selama lebih dari 1x24 jam, silahkan hubungi nomor admin di bawah ini : <br>
                082181034762 (Steven)
            </div>
            <div class="font-semibold mt-4">
                Ketentuan:
            </div>
            <div class="mt-4">
                1. Pendaftar baru harus melengkapi semua data yang di minta sesuai dengan data asli. <br>
                2. Pendaftar wajib melampirkan bukti hasil tes yang valid. <br>
                3. Pendaftar wajib menunggu waktu selama 1x24 jam untuk proses penerimaan mahasiswa.
            </div>
        </div>
    </div>
</div>
@endif

@endsection