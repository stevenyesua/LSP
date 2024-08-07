@extends('layouts.main')
@section('content')

<div class="container-detail bg-gray-900 mt-16 mx-96">
    <div class="title text-white font-semibold p-4 text-lg">
        Detail User
    </div>
</div>
<div class="bg-white mx-96 p-8 text-xl flex gap-8">
    <div class="kiri-detail-user">
        <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Image" class="rounded-lg w-72" style="box-shadow: 0px 3px 1px 0px rgba(0, 0, 0, 0.25);">
    </div>
    <div class="kanan-detail-user">
        <div class="font-semibold text-3xl">
            {{(Auth::user()->nama)}}
        </div>
        <div class="font-semibold text-sm bg-gray-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
            {{(Auth::user()->role->nama)}}
        </div>
        <div class="mt-4 text-sm font-medium text-gray-600">
            Informasi Pribadi
        </div>
        <div class="informasi-user flex">
            <div class="mt-4 text-sm font-medium text-gray-600">
                Email <br>
                No Telepon <br>
                Asal Sekolah <br>
                Tanggal Lahir <br>
            </div>
            <div class="mt-4 ml-16 text-sm font-medium text-gray-600">
                : {{(Auth::user()->email)}} <br>
                : {{(Auth::user()->no_telp)}} <br>
                : {{(Auth::user()->asal_sekolah)}} <br>
                : {{(Auth::user()->tanggal_lahir)}} <br>
            </div>
        </div> 
    </div>
</div>

@endsection