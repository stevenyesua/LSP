@extends('layouts.main')
@section('content')
<div class="container-detail bg-gray-900 mt-16 mx-96">
    <div class="title text-white font-semibold p-4 text-lg">
        Form Ubah User
    </div>
</div>


<div class="bg-white mx-96 p-8 text-xl  gap-8">
    <form method="POST" action="{{route('user.update', ['id' => $user->id])}}"enctype="multipart/form-data">
    @csrf
    @method('PATCH')
        <div class="relative mt-4">
            <input value="{{ $user->nama }}" name="nama" type="text" id="nama" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="nama" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nama</label>
        </div>
        <div class="">
            <h2 class="text-xs mt-2">Nama harus sesuai dengan ijazah atau rapor SMA/SMK</h2>
        </div>
        <div class="relative mt-4">
            <input value="{{ $user->email }}" name="email" type="email" id="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="email" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Email</label>
        </div>
        <div class="relative mt-4">
            <input value="{{ $user->asal_sekolah }}" name="asal_sekolah" type="text" id="asal_sekolah" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="asal_sekolah" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Asal Sekolah</label>
        </div>
        <div class="relative mt-4">
            <input value="{{ $user->no_telp }}" name="no_telp" type="text" id="no_telp" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="no_telp" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">No. Telepon</label>
        </div>
        <div class="relative mt-4">
            <input value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}" name="tanggal_lahir" type="date" id="tgl_lahir" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="tgl_lahir" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Tanggal Lahir</label>
        </div>
        <div class="relative mt-4">
            <select  value="{{ $user->id }}" {{ old('status') == $user->id ? 'selected' : '' }} name="status" id="status" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                <option value="aktif" {{ old('status', $user->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="pending" {{ old('status', $user->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="nonaktif" {{ old('status', $user->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
            <label for="status" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Jenis Kelamin</label>
        </div>
        <div class="relative mt-4">
            <button type="submit" name="submit" class="text-white bg-[#3b5998] w-full hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                Ubah
            </button>
        </div>
    </form>
</div>

@endsection