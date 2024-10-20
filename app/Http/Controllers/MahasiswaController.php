<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required'
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $mhs = Mahasiswa::FindOrFail($id);
        return view('edit', compact('mhs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required'
        ]);

        $mhs = Mahasiswa::FindOrFail($id)->update($request->all());
        return redirect()->back();
    }

    public function hapus($id)
    {
        $mhs = Mahasiswa::FindOrFail($id)->delete();
        return redirect()->back();
    }
}
