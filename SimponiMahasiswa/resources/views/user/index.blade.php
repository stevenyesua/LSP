@extends('layouts.main')
@section('content')

<div class=" mx-auto px-32 py-8">
    <div class="mb-6 text-xl font-semibold ">Tabel User</div>
    <div>
        <table class="w-full text-left text-sm text-black" id="table-user">
            <thead class="text-xs uppercase bg-gray-900 text-white ">
                <tr>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Foto</th>
                    <th class="px-4 py-2">bukti</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">No Telepon</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($collection as $idx => $item)
                <tr style="cursor:pointer" onclick="detailUser('{{$item->id}}')" class="hover:bg-gray-50 dark:hover:bg-gray-200 cursor-pointer">
                    <td class="px-4 py-2">{{ $item->nama }}</td>
                    <td><img src="{{ asset('storage/' . $item->foto) }}" alt="Image" style="max-width: 100px; max-height: 100px;"></td>
                    <td><img src="{{ asset('storage/' . $item->bukti) }}" alt="Image" style="max-width: 100px; max-height: 100px;"></td>
                    <td class="px-4 py-2">{{ $item->role->nama }}</td>
                    <td class="px-4 py-2">{{ $item->email }}</td>
                    <td class="px-4 py-2">{{ $item->no_telp }}</td>
                    <td class="px-4 py-2">{{ $item->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>

function detailUser(id) {
    window.location=window.location.origin+'/user/detail/'+id;
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
