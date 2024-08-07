@extends('layouts.main')
@section('content')
<div class="container mt-32 mx-auto">
    <div class="box-about flex bg-white">
        <div class="box-title bg-gray-900 py-8 px-8 text-white font-semibold text-xl">
            Informasi Biaya Perkuliahan di UMDP
        </div>
        <div class="box-deskripsi p-8 text-sm">
            <table class="w-full bg-white border border-gray-300 table-auto text-lg">
                <thead class="bg-gray-900 text-white">
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300" rowspan="2">Program Studi</th>
                        <th class="py-2 px-4 border-b border-gray-300" colspan="2">Uang Kuliah Per Semester</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300">Pagi</th>
                        <th class="py-2 px-4 border-b border-gray-300">Malam</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-200">
                        <td class="py-2 px-4 border-b border-gray-300">Akuntansi (S1)</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 7.000.000</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 8.000.000</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Manajemen (S1)</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 8.000.000</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 9.000.000</td>
                    </tr>
                    <tr class="bg-gray-200">
                        <td class="py-2 px-4 border-b border-gray-300">Teknik Elektro (S1)</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 5.000.000</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 6.000.000<span class="text-xs">*</span></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Informatika (S1)</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 8.000.000</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 9.000.000</td>
                    </tr>
                    <tr class="bg-gray-200">
                        <td class="py-2 px-4 border-b border-gray-300">Sistem Informasi (S1)</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 8.000.000</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp. 9.000.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
