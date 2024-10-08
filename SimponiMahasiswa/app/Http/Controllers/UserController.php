<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    function __construct()
    {
        $this->model = new User;
        $this->table = $this->model->table;
        $this->loc = 'user.';
    }

    function index() {
        $this->authorize('view',User::class);
        $collection = User::all();
        return view('user.index', compact('collection'));
    }

    function register() {
        // $this->authorize('create',User::class);
        $role = Role::all();
        return view('user.register', compact('role'));
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'asal_sekolah' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'bukti' => 'nullable|file|mimes:jpg,png,jpeg,pdf',
            'foto' => 'nullable|file|mimes:jpg,png,jpeg'
        ]);
        
        // $this->authorize('create',User::class);
        $model = $this->model; 
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->password = bcrypt($request->password);
        $model->asal_sekolah = $request->asal_sekolah;
        $model->no_telp = $request->no_telp;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $bukti='';
        if ($request->hasFile('bukti') && $request->file('bukti')->isValid()) {
            $text = $request->bukti->getClientOriginalExtension();
            $bukti = "foto_bukti-".time() . "." . $text;
            $request->bukti->storeAs("public", $bukti);
            $model->bukti = $bukti;
        };
        $model->status = 2;
        $model->role_id = 2;
        $foto='';
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $text = $request->foto->getClientOriginalExtension();
            $foto = "foto-".time() . "." . $text;
            $request->foto->storeAs("public", $foto);
            $model->foto = $foto;
        };
        $model->save();
        $request->session()->flash("info", "Data baru berhasil ditambahkan");
        return redirect()->route('login');
    }
    
    function edit($id)
    {
        $this->authorize('update',User::class);
        $user = get_class($this->model)::find($id);
        $role = Role::all();
        return view('user.edit', compact('user','role'));
    }

    function update(Request $request, $id) {
        $this->authorize('update',User::class);
        $update = get_class($this->model)::find($id);
        $update->nama = $request->nama;
        $update->email = $request->email;
        $update->asal_sekolah = $request->asal_sekolah;
        $update->no_telp = $request->no_telp;
        $update->tanggal_lahir = $request->tanggal_lahir;
        $update->status = $request->status;
        $update->save();
        $request->session()->flash("info", "Data berhasil diubah");
        return redirect()->route('user.index');
    }

    function destroy($id)
    {
        $this->authorize('delete',User::class);
        $destroy = get_class($this->model)::find($id);
        $destroy->delete();
        return redirect()->route('user.index');
    }

    
    function detail($id) {
        $collection = User::find($id);
        return view('user.detail', compact('collection'));
    }

    public function validationAdmin(Request $request,string $id)
    {
        $this->authorize('update',User::class);
        $update = get_class($this->model)::find($id);
        // $this->authorize('validationAdmin',[User::class,$update]);
        $update->status = $request->validatorAdmin;
        $update->save();
        return redirect()->back();
    }
}
