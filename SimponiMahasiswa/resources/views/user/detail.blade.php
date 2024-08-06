@extends('layouts.main')
@section('content')

<div class="container-detail bg-gray-900 mt-16 mx-96">
    <div class="title text-white font-semibold p-4 text-lg">
        Detail User
    </div>
</div>
<div class="bg-white mx-96 p-8 text-xl flex gap-8">
    <div class="kiri-detail-user">
        <img src="{{ asset('storage/' . $collection->foto) }}" alt="Image" class="rounded-lg w-72" style="box-shadow: 0px 3px 1px 0px rgba(0, 0, 0, 0.25);">
    </div>
    <div class="kanan-detail-user">
        <div class="font-semibold text-3xl">
            {{($collection->nama)}}
        </div>
        <div class="font-semibold text-sm bg-gray-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
            {{($collection->role->nama)}}
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
                : {{($collection->email)}} <br>
                : {{($collection->no_telp)}} <br>
                : {{($collection->asal_sekolah)}} <br>
                : {{($collection->tanggal_lahir)}} <br>
            </div>
        </div> 
        <div class="status-akun flex text-sm font-medium text-gray-600">
            <div class="mr-2">
                Status Akun
            </div>
            <div class="ml-16">
                @php
                $status = $collection->status;
                @endphp
                @if($status == 'pending')
                <div class="status-df flex gap-2">
                    <div>:</div>
                    <form action="{{route('user.validate_admin',['id'=>$collection->id])}}" method="POST">
                    @method('PATCH')
                    @csrf
                        <div class="flex gap-2 status-acc mt-2">
                            <button type="submit" value = "aktif" name="validatorAdmin" id="valid-accept" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Terima
                            </button>
                            atau
                            <button type="submit" value = "nonaktif" name="validatorAdmin" id="valid-reject" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Tolak
                            </button>
                        </div>
                    </form>  
                </div>
                @elseif($status == 'aktif')
                <div class="status-df flex">
                    <div class="mr-1">:</div>
                    <div class="font-semibold text-sm bg-green-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                        Aktif
                    </div>
                </div>
                @else
                <div class="status-df flex">
                    <div class="mr-1">:</div>
                    <div class="font-semibold text-sm bg-red-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                        Tidak Aktif
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="button-detail flex gap-2 mt-2">
            <a href="/login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
            <a href="/login" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Hapus</a>
            <!-- Button to open modal -->
            <button id="open-modal-btn" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
            Cek Bukti Pembayaran
            </button>

            <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Bukti Pembayaran
                    </h3>
                    <button id="close-modal-btn" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4 flex bukti-foto">
                    <img src="{{ asset('storage/' . $collection->bukti) }}" alt="Image" class="rounded-lg w-64" style="box-shadow: 0px 3px 1px 0px rgba(0, 0, 0, 0.25);">
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Menampilkan modal
    document.getElementById('open-modal-btn').addEventListener('click', function() {
        document.getElementById('default-modal').classList.remove('hidden');
    });

    // Menyembunyikan modal
    document.getElementById('close-modal-btn').addEventListener('click', function() {
        document.getElementById('default-modal').classList.add('hidden');
    });

    // Menambahkan event listener untuk tombol 'I accept' dan 'Decline'
    document.getElementById('accept-btn').addEventListener('click', function() {
        alert('You accepted the terms.');
        document.getElementById('default-modal').classList.add('hidden');
    });

    document.getElementById('decline-btn').addEventListener('click', function() {
        alert('You declined the terms.');
        document.getElementById('default-modal').classList.add('hidden');
    });
</script>

@endsection