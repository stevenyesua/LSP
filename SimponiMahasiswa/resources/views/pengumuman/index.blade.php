@extends('layouts.main')
@section('content')
<div class="container mt-16 gap-8">
    <div class="welcome text-xl font-semibold">
        Hai Selamat Datang Steven!
    </div>
    @foreach ($collection as $idx => $item)
        <div class="slot">
            <div class="bg-gray-900 text-white rounded-t-lg py-2 px-4 font-semibold">
                {{ \Carbon\Carbon::parse($item->tanggal)->format('j F Y') }}
            </div>
            <a href="#" class="flex flex-col md:flex-row items-center bg-white  border-gray-200 rounded-b-lg shadow hover:bg-gray-200 debug">
                <!-- <img class="object-cover w-96 md:w-48 h-48 md:h-auto rounded-t-lg md:rounded-none md:rounded-l-lg debug" src="{{ asset('storage/' . $item->gambar) }}" alt=""> -->
                <img class="object-cover w-64 rounded-bl-lg h-48 md:h-auto debug" src="{{ asset('storage/' . $item->gambar) }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal max-w-96">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black ">{{ $item->judul }}1</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-600 ">{{ $item->deskripsi }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>

@endsection