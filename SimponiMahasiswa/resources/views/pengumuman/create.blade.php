@extends('layouts.main')
@section('content')
<div class="container-detail bg-gray-900 mt-16 mx-96">
    <div class="title text-white font-semibold p-4 text-lg">
        Form Tambah Pengumuman
    </div>
</div>
<div class="bg-white mx-96 p-8 text-xl  gap-8">
    <form method="POST" action="{{route('pengumuman.store')}}"enctype="multipart/form-data">
    @csrf
        <div class="relative mt-4">
            <input name="judul" type="text" id="judul" maxlength="100" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="judul" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Judul</label>
        </div>
        <div class="">
            <h2 class="text-xs mt-2">Judul maksimal 100 karakter.</h2>
        </div>
        <div class="relative mt-4">
            <textarea name="deskripsi" id="deskripsi" rows="4" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "></textarea>
            <label for="deskripsi" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Deskripsi</label>
        </div>
        <div class="relative mt-4">
            <input name="gambar" type="file" id="gambar" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="gambar" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Thumbnail</label>
        </div>
        <div class="relative mt-4">
            <button type="submit" name="submit" class="text-white bg-[#3b5998] w-full hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                Tambahkan
            </button>
        </div>
    </form>
</div>

@endsection