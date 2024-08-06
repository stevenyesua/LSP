<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Support\Carbon;


class PengumumanController extends Controller
{
    function __construct()
    {
        $this->model = new Pengumuman;
        $this->table = $this->model->table;
        $this->loc = 'pengumuman.';
    }

    function index() {
        // $this->authorize('view',User::class);
        $collection = Pengumuman::all();
        return view('pengumuman.index', compact('collection'));
    }

    function create() {
        // $this->authorize('create',User::class);
        $user = User::all();
        return view('pengumuman.create', compact('user'));
    }

    function store(Request $request)
    {
        // $this->authorize('create',User::class);
        $model = $this->model; 
        // $model->user_id = $request->user_id;
        $model->judul = $request->judul;
        $model->deskripsi = $request->deskripsi;
        $foto='';
        if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
            $text = $request->gambar->getClientOriginalExtension();
            $gambar = "foto-".time() . "." . $text;
            $request->gambar->storeAs("public", $gambar);
            $model->gambar = $gambar;
        };
        $model->tanggal = Carbon::today()->format('Y-m-d');;
        $model->save();
        $request->session()->flash("info", "Data baru berhasil ditambahkan");
        return redirect()->route('pengumuman.index');
    }
    
    function edit($id)
    {
        // $this->authorize('update',User::class);
        $pengumuman = get_class($this->model)::find($id);
        $user = User::all();
        return view('pengumuman.edit', compact('pengumuman','user'));
    }

    function update(Request $request, $id) {
        // $this->authorize('update',User::class);
        $update = get_class($this->model)::find($id);
        $update->user_id = $request->user_id;
        $update->judul = $request->judul;
        $update->deskripsi = $request->deskripsi;
        $foto='';
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $text = $request->foto->getClientOriginalExtension();
            $foto = "foto-".time() . "." . $text;
            $request->foto->storeAs("public", $foto);
            $update->foto = $foto;
        };
        $update->tanggal = $request->tanggal;
        $update->save();
        $request->session()->flash("info", "Data berhasil diubah");
        return redirect()->route('pengumuman.index');
    }

    function destroy($id)
    {
        // $this->authorize('delete',User::class);
        $destroy = get_class($this->model)::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    
    function detail($id) {
        $collection = Pengumuman::find($id);
        return view('pengumuman.detail', compact('collection'));
    }
}
