<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class PengumumanController extends Controller
{
    function __construct()
    {
        $this->model = new Pengumuman;
        $this->table = $this->model->table;
        $this->loc = 'pengumuman.';
    }

    function index() {
        $this->authorize('view',Pengumuman::class);
        $collection = Pengumuman::all();
        return view('pengumuman.index', compact('collection'));
    }

    function create() {
        $this->authorize('create',Pengumuman::class);
        $user = User::all();
        return view('pengumuman.create', compact('user'));
    }

    function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|file|mimes:jpg,png,jpeg'
        ]);

        $this->authorize('create',Pengumuman::class);
        $model = $this->model; 
        // $model->user_id = $request->user_id;
        $model->user_id = Auth::user()->id;
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
        $this->authorize('update',Pengumuman::class);
        $pengumuman = get_class($this->model)::find($id);
        $user = User::all();
        return view('pengumuman.edit', compact('pengumuman','user'));
    }

    function update(Request $request, $id) {
        $this->authorize('update',Pengumuman::class);
        $update = get_class($this->model)::find($id);
        $update->judul = $request->judul;
        $update->deskripsi = $request->deskripsi;
        $update->tanggal = Carbon::today()->format('Y-m-d');;
        $update->save();
        $request->session()->flash("info", "Data berhasil diubah");
        return redirect()->route('pengumuman.index');
    }

    function destroy($id)
    {
        $this->authorize('delete',Pengumuman::class);
        $destroy = get_class($this->model)::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    
    function detail($id) {
        $this->authorize('view',Pengumuman::class);
        $collection = Pengumuman::find($id);
        return view('pengumuman.detail', compact('collection'));
    }
}
