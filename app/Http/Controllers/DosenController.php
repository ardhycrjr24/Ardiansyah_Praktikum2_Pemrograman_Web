<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Menampilkan daftar dosen
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    // Menampilkan form tambah dosen
    public function create()
    {
        return view('dosen.create');
    }

    // Simpan data dosen baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nidn' => 'required|string|unique:dosens',
            'jabatan' => 'required|string',
            'email' => 'required|email|unique:dosens',
            'telepon' => 'required|string|max:15',
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil ditambahkan.');
    }

    // Menampilkan form edit dosen
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    // Update data dosen
    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:100',
            'nidn' => 'required|string|unique:dosens,nidn,' . $dosen->id,
            'jabatan' => 'required|string',
            'email' => 'required|email|unique:dosens,email,' . $dosen->id,
            'telepon' => 'required|string|max:15',
        ]);

        $dosen->update($request->all());

        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil diperbarui.');
    }

    // Hapus data dosen
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil dihapus.');
    }
}
