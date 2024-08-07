@extends('layouts.main')
@section('content')

<div class=" mx-auto px-32 py-8">
    <div class="mb-6 text-xl font-semibold ">Tabel Mahasiswa</div>
    <div>
        <table class="w-full text-left text-sm text-black" id="table-user">
            <thead class="text-xs uppercase bg-gray-900 text-white ">
                <tr>
                    <th class="px-4 py-2">Foto</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Jenis Kelamin</th>
                    <th class="px-4 py-2">Jurusan</th>
                    <th class="px-4 py-2">Waktu Kuliah</th>
                    <th class="px-4 py-2">Status Mahasiswa</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($collection as $idx => $item)
                <tr style="cursor:pointer" onclick="detailMahasiswa('{{$item->id}}')" class="hover:bg-gray-50 dark:hover:bg-gray-200 cursor-pointer">
                    <td><img src="{{ asset('storage/' . $item->user->foto) }}" alt="Image" style="max-width: 100px; max-height: 100px;"></td>
                    <td class="px-4 py-2">{{ $item->user->nama }}</td>
                    <td class="px-4 py-2">{{ $item->user->email }}</td>
                    <td class="px-4 py-2">{{ $item->jenis_kelamin }}</td>
                    <td class="px-4 py-2">{{ $item->jurusan }}</td>
                    <td class="px-4 py-2">{{ $item->waktu_kuliah }}</td>
                    <td class="px-4 py-2">
                        @php
                        $status = $item->status;
                        @endphp
                        @if($status == 'pending')
                        <div class="status-df flex">

                            <div class="font-semibold text-sm bg-yellow-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                Pending
                            </div>
                        </div>
                        @elseif($status == 'aktif')
                        <div class="status-df flex">
                            <div class="font-semibold text-sm bg-green-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                Aktif
                            </div>
                        </div>
                        @else
                        <div class="status-df flex">
                            <div class="font-semibold text-sm bg-red-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                Tidak Aktif
                            </div>
                        </div>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>

function detailMahasiswa(id) {
    window.location=window.location.origin+'/mahasiswa/detail/'+id;
}

$(document).ready(function() {
    $('#table-user').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true,
    });
});
</script>

@endsection
