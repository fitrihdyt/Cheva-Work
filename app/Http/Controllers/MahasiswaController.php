<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // Pastikan user sudah login
        $this->middleware('role:admin')->only(['create', 'store', 'edit', 'update', 'destroy']); // Hanya admin yang bisa mengakses ini
    }

    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NPM' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'tahunMasuk' => 'required|date',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index');
    }
}