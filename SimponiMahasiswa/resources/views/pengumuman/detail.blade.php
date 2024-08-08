@extends('layouts.main')
@section('content')

<div class="container mt-16 w-max px-80">
    <div class="box-about flex bg-white">
        <div class="box-title bg-gray-900 py-8 px-8 text-white font-semibold text-xl flex" style="justify-content: space-between">
            <div>
                {{ \Carbon\Carbon::parse($collection->tanggal)->format('j F Y') }}
            </div>
            <div class="flex gap-2">
                <a href="{{ route('pengumuman.edit', $collection->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                <form action="{{ route('user.destroy', $collection->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="_method" value="delete">
                    <button type="hidden" name="_method" value="delete" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800 text-center inline-flex items-center justify-center dark:focus:ring-[#3b5998]/55">
                        Hapus
                    </button>
                </form> 
            </div>
        </div>
        <div class="px-8 pt-8 text-2xl ">
            <div class="title-detail-pengumuman flex">
                <div class="font-semibold">
                    {{$collection->judul}}
                </div>
                <div class="font-medium text-xs text-gray-600">
                    Di posting oleh {{$collection->user->nama}}
                </div>
            </div> 
        </div>
        <div class="">
            <img src="{{ asset('storage/' . $collection->gambar) }}" alt="Image" class="rounded-lg w-max p-8">
        </div>
        <div class="box-deskripsi px-8 pb-8 text-md">
            {{$collection->deskripsi}}
        </div>
    </div>
</div>

@endsection