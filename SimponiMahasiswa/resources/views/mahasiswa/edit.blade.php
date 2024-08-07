@extends('layouts.main')
@section('content')
<div class="container-detail bg-gray-900 mt-16 mx-96">
    <div class="title text-white font-semibold p-4 text-lg">
        Form Ubah Mahasiswa
    </div>
</div>


<div class="bg-white mx-96 p-8 text-xl  gap-8">
    <form method="POST" action="{{route('mahasiswa.update', ['id' => $mahasiswa->id])}}"enctype="multipart/form-data">
    @csrf
    @method('PATCH')
        <div class="relative mt-4">
            <input disabled value="{{ $mahasiswa->user->nama }}" name="nama" type="text" id="nama" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="nama" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nama</label>
        </div>
        <div class="">
            <h2 class="text-xs mt-2">Nama harus sesuai dengan ijazah atau rapor SMA/SMK</h2>
        </div>
        <div class="relative mt-4">
            <select  value="{{ $mahasiswa->id }}" {{ old('jenis_kelamin') == $mahasiswa->id ? 'selected' : '' }} name="jenis_kelamin" id="jenis_kelamin" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                <option value="L" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki - laki</option>
                <option value="P" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
            <label for="jenis_kelamin" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Jenis Kelamin</label>
        </div>
        <div class="relative mt-4">
            <select  value="{{ $mahasiswa->id }}" {{ old('jurusan') == $mahasiswa->id ? 'selected' : '' }} name="jurusan" id="jurusan" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                <option value="informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'informatika' ? 'selected' : '' }}>Informatika (S1)</option>
                <option value="sistem-informasi" {{ old('jurusan', $mahasiswa->jurusan) == 'sistem-informas' ? 'selected' : '' }}>Sistem Informasi (S1)</option>
                <option value="manajemen-informatika" {{ old('jurusan', $mahasiswa->jurusan) == 'manajemen-informatika' ? 'selected' : '' }}>Manajemen Informatika (D3)</option>
                <option value="teknik-elektro" {{ old('jurusan', $mahasiswa->jurusan) == 'teknik-elektro' ? 'selected' : '' }}>Teknik Elektro (S1)</option>
                <option value="manajemen" {{ old('jurusan', $mahasiswa->jurusan) == 'manajemen' ? 'selected' : '' }}>Manejemen (S1)</option>
                <option value="akuntansi" {{ old('jurusan', $mahasiswa->jurusan) == 'akuntansi' ? 'selected' : '' }}>Akuntansi (S1)</option>
            </select>
            <label for="jurusan" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Jurusan</label>
        </div>
        <div class="relative mt-4">
            <input value="{{ $mahasiswa->agama }}" name="agama" type="text" id="agama" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="agama" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Agama</label>
        </div>
        <div class="relative mt-4">
            <input value="{{ $mahasiswa->alamat }}" name="alamat" type="text" id="alamat" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="alamat" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
        </div>
        <div class="relative mt-4">
            <input value="{{ $mahasiswa->tempat_lahir }}" name="tempat_lahir" type="text" id="tempat_lahir" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="tempat_lahir" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Tempat Lahir</label>
        </div>
        <div class="relative mt-4">
            <select  value="{{ $mahasiswa->id }}" {{ old('waktu_kuliah') == $mahasiswa->id ? 'selected' : '' }} name="waktu_kuliah" id="waktu_kuliah" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                <option value="pagi" {{ old('waktu_kuliah', $mahasiswa->waktu_kuliah) == 'pagi' ? 'selected' : '' }}>Pagi</option>
                <option value="malam" {{ old('waktu_kuliah', $mahasiswa->waktu_kuliah) == 'malam' ? 'selected' : '' }}>Malam</option>
            </select>
            <label for="status" class="ml-4 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Jenis Kelamin</label>
        </div>
        <div class="relative mt-4">
            <select  value="{{ $mahasiswa->id }}" {{ old('status') == $mahasiswa->id ? 'selected' : '' }} name="status" id="status" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                <option value="aktif" {{ old('status', $mahasiswa->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="pending" {{ old('status', $mahasiswa->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="nonaktif" {{ old('status', $mahasiswa->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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