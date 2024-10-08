@extends('layouts.main')
@section('content')
<div class="container mt-16 gap-8">
    <div class="welcome text-xl font-semibold">
        Hai Selamat Datang {{Auth::user()->nama}}!
        @if(Auth::user()->role_id=='1')
        <a href="/pengumuman/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Pengumuman</a>
        @endif
    </div>
   
    @foreach ($collection as $idx => $item)
        <div class="slot">
            <div class="bg-gray-900 text-white rounded-t-lg py-2 px-4 font-semibold">
                {{ \Carbon\Carbon::parse($item->tanggal)->format('j F Y') }}
            </div>
            <a href="/pengumuman/detail/{{$item->id}}" class="flex flex-col md:flex-row items-center bg-white  border-gray-200 rounded-b-lg shadow hover:bg-gray-200 debug">
                <!-- <img class="object-cover w-96 md:w-48 h-48 md:h-auto rounded-t-lg md:rounded-none md:rounded-l-lg debug" src="{{ asset('storage/' . $item->gambar) }}" alt=""> -->
                <img class="object-cover w-64 rounded-bl-lg h-48 md:h-auto debug" src="{{ asset('storage/' . $item->gambar) }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal max-w-96">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black judul-pengumuman">{{ $item->judul }}1</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-600 deskripsi-pengumuman">{{ $item->deskripsi }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>


@endsection