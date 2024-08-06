<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;

class MahasiswaController extends Controller
{
    function __construct()
    {
        $this->model = new Mahasiswa;
        $this->table = $this->model->table;
        $this->loc = 'mahasiswa.';
    }

    function index() {
        // $this->authorize('view',User::class);
        $collection = Mahasiswa::all();
        return view('mahasiswa.index', compact('collection'));
    }

    function create() {
        // $this->authorize('create',User::class);
        $user = User::all();
        return view('mahasiswa.create', compact('user'));
    }

    function store(Request $request)
    {
        // $this->authorize('create',User::class);
        $model = $this->model; 
        $model->user_id = $request->user_id;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->password = bcrypt($request->password);
        $model->jurusan = $request->jurusan;
        $model->waktu_kuliah = $request->waktu_kuliah;
        $model->agama = $request->agama;
        $model->alamat = $request->alamat;
        $model->tempat_lahir = $request->tempat_lahir;
        $model->hasil_test = $request->hasil_test;
        $model->status = 2;
        $model->save();
        $request->session()->flash("info", "Data baru berhasil ditambahkan");
        return redirect()->route('mahasiswa.index');
    }
    
    function edit($id)
    {
        // $this->authorize('update',User::class);
        $mahasiswa = get_class($this->model)::find($id);
        $user = User::all();
        return view('mahasiswa.edit', compact('mahasiswa','user'));
    }

    function update(Request $request, $id) {
        // $this->authorize('update',User::class);
        $update = get_class($this->model)::find($id);
        $update->user_id = $request->user_id;
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->password = bcrypt($request->password);
        $update->jurusan = $request->jurusan;
        $update->waktu_kuliah = $request->waktu_kuliah;
        $update->agama = $request->agama;
        $update->alamat = $request->alamat;
        $update->tempat_lahir = $request->tempat_lahir;
        $update->hasil_test = $request->hasil_test;
        $update->status = $request->status;
        $update->save();
        $request->session()->flash("info", "Data berhasil diubah");
        return redirect()->route('mahasiswa.index');
    }

    function destroy($id)
    {
        // $this->authorize('delete',User::class);
        $destroy = get_class($this->model)::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    function detail($id) {
        $collection = Mahasiswa::find($id);
        return view('mahasiswa.detail', compact('collection'));
    }
}
