@extends('layouts.main')
@section('content')

<div class="container mt-16 mb-16">
    <div class="box">
        <div class="box-penjelasan flex bg-gray-900 w-96 text-white p-8 gap-2">
            <img src="{{ asset('images/lsp_logo.png') }}" class="h-8" alt="Flowbite Logo" />
            <h1 class="font-bold text-xl text-center">SIMPONI MAHASISWA</h1>
        </div>
        <div class="box-formulir bg-white w-96 p-8">
            <h1 class="font-bold text-lg">Login</h1>
            <form method="POST" action="{{ route('login') }}">
            @csrf
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
                <div class="relative mt-4 text-xs flex">
                    <p class="">Jika belum memiliki akun silahkan
                        <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                       daftar disini.
                        </a>
                    </p>
                </div>
                <div class="relative mt-4">
                    <button type="submit" name="submit" class="text-white bg-[#3b5998] w-full hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                        {{ __('Masuk') }}
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