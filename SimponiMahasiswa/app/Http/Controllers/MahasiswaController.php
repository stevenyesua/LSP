<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MahasiswaController extends Controller
{
    function __construct()
    {
        $this->model = new Mahasiswa;
        $this->table = $this->model->table;
        $this->loc = 'mahasiswa.';
    }

    function index() {
        $this->authorize('view',Mahasiswa::class);
        $collection = Mahasiswa::all();
        return view('mahasiswa.index', compact('collection'));
    }

    function create() {
        $this->authorize('create',Mahasiswa::class);
        $user = User::all();
        $mahasiswa= Mahasiswa::where('user_id', Auth::user()->id)->get();
        $is_registered = count($mahasiswa) > 0;
        return view('mahasiswa.create', compact('user','mahasiswa','is_registered'));
    }

    function store(Request $request)
    {
        $this->authorize('create',Mahasiswa::class);
        $model = $this->model; 
        $model->user_id = Auth::user()->id;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->jurusan = $request->jurusan;
        $model->waktu_kuliah = $request->waktu_kuliah;
        $model->agama = $request->agama;
        $model->alamat = $request->alamat;
        $model->tempat_lahir = $request->tempat_lahir;
        $hasil_test='';
        if ($request->hasFile('hasil_test') && $request->file('hasil_test')->isValid()) {
            $text = $request->hasil_test->getClientOriginalExtension();
            $hasil_test = "foto_test-".time() . "." . $text;
            $request->hasil_test->storeAs("public", $hasil_test);
            $model->hasil_test = $hasil_test;
        };
        $model->status = 2;
        $model->save();
        $request->session()->flash("info", "Data baru berhasil ditambahkan");
        return redirect()->route('home');
    }
    
    function edit($id)
    {
        $this->authorize('update',Mahasiswa::class);
        $mahasiswa = get_class($this->model)::find($id);
        $user = User::all();
        return view('mahasiswa.edit', compact('mahasiswa','user'));
    }

    function update(Request $request, $id) {
        $this->authorize('update',Mahasiswa::class);
        $update = get_class($this->model)::find($id);
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->jurusan = $request->jurusan;
        $update->waktu_kuliah = $request->waktu_kuliah;
        $update->agama = $request->agama;
        $update->alamat = $request->alamat;
        $update->tempat_lahir = $request->tempat_lahir;
        $update->status = $request->status;
        $update->save();
        $request->session()->flash("info", "Data berhasil diubah");
        return redirect()->route('mahasiswa.index');
    }

    function destroy($id)
    {
        $this->authorize('delete',Mahasiswa::class);
        $destroy = get_class($this->model)::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    function detail($id) {
        $this->authorize('view',Mahasiswa::class);
        $collection = Mahasiswa::find($id);
        return view('mahasiswa.detail', compact('collection'));
    }

    
    public function validationAdmin(Request $request,string $id)
    {
        $this->authorize('update',User::class);
        $update = get_class($this->model)::find($id);
        // $this->authorize('validationAdmin',[User::class,$update]);
        $update->status = $request->validatorAdmin;
        $update->save();

        if ($request->validatorAdmin == 'aktif') {
            $update2 = User::find($update->user_id);
            $update2->role_id = 3;
            $update2->save();
        }
        return redirect()->back();
    }

}
