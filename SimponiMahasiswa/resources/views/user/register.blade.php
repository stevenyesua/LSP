@extends('layouts.main')
@section('content')

<div class="container mt-16 mb-16">
    <div class="box flex">
        <div class="box-penjelasan bg-gray-900 w-96 text-white p-8">
            <h1 class="font-bold text-lg">Beberapa ketentuan pembuatan akun</h1>
            <div class="mt-4">
                Jika anda ingin mendaftar sebagai mahasiswa baru makan anda harus memiliki Account untuk Login ke Simponi.
            </div>
            <div class="mt-4 font-bold">
                Syarat Pembuatan Akun :
            </div>
            <div class="mt-4 ">
                Lulus dan tamat SMA/SMK
            </div>
            <div>
                Membayar Biaya formulir pendaftaran sebesar Rp. 400.000 ke rekening atas nama Universitas Multi Data Palembang dengan No Rekening BCA : 1500141515 
            </div>
            <div class="mt-4 font-bold">
                Ketentuan lainnya :
            </div>
            <div class="mt-4">
                Ketika Calon Mahasiswa selesai mendaftarkan akun nya, maka mahasiswa akan menunggu persetujuan pembuatan akun dari Admin selama 1x24 jam, Silahkan hubungi kontak admin : 082181034762
            </div>
            <div class="mt-4 font-bold">
                Note :
            </div>
            <div class="mt-4">
                <div>Jika calon mahasiswa TIDAK melampirkan bukti pembayaran yang valid , maka pembuatan akun akan di TOLAK.</div>
            </div>            
        </div>
        <div class="box-formulir bg-white w-96 p-8">
            <h1 class="font-bold text-lg">Daftar Akun</h1>
            <form method="POST" action="{{route('user.store')}}"enctype="multipart/form-data">
            @csrf
                <div class="relative mt-4">
                    <input name="nama" type="text" id="nama" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="nama" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nama Lengkap</label>
                </div>
                <div class="">
                    <h2 class="text-xs mt-2">Nama harus sesuai dengan ijazah atau rapor SMA/SMK</h2>
                </div>
                <div class="relative mt-4">
                    <input name="email" type="text" id="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="email" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Email</label>
                </div>
                <div class="relative mt-4">
                    <input name="password" type="password" id="password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="password" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Password</label>
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <img id="password-toggle-icon" src="{{ asset('/images/eye-close.png') }}" onclick="togglePasswordVisibility()" class="h-5 w-5 text-gray-400 cursor-pointer" alt="Toggle Password Visibility">
                    </div>
                </div>
                <div class="relative mt-4">
                    <input name="foto" type="file" id="foto" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="foto" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Foto Profil</label>
                </div>
                <div class="">
                    <h2 class="text-xs mt-2">Foto profil dapat di kosongkan/ di edit setelah mendaftar</h2>
                </div>
                <div class="relative mt-4">
                    <input name="asal_sekolah" type="text" id="asal_sekolah" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="asal_sekolah" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Asal SMA/SMK</label>
                </div>
                <div class="relative mt-4">
                    <input name="no_telp" type="text" id="no_telp" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="no_telp" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">No Handphone</label>
                </div>
                <div class="relative mt-4">
                    <input name="tanggal_lahir" type="date" id="tgl_lahir" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="tgl_lahir" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Tanggal Lahir</label>
                </div>
                <div class="relative mt-4">
                    <input name="bukti" type="file" id="bukti-pembayaran" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="bukti-pembayaran" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Bukti Pembayaran</label>
                </div>
                <div class="relative mt-4 text-xs flex">
                    <p class="">Jika sudah memiliki akun silahkan
                        <a href="/login" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                       masuk disini.
                        </a>
                    </p>
                </div>
                <div class="relative mt-4">
                    <button type="submit" name="submit" class="text-white bg-[#3b5998] w-full hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.getElementById('password-toggle-icon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.src = "{{ asset('/images/eye-open.png') }}"; // Ganti ke ikon mata terbuka
        } else {
            passwordField.type = 'password';
            toggleIcon.src = "{{ asset('/images/eye-close.png') }}"; // Ganti ke ikon mata tertutup
        }
    }
</script>


@endsection