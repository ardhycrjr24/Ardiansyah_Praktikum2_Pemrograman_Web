<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk'  => 'required|unique:mata_kuliahs',
            'nama_mk'  => 'required',
            'sks'      => 'required|integer',
            'semester' => 'required|integer',
        ]);

        MataKuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan');
    }

    // 🔹 Form Edit
    public function edit($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    // 🔹 Update Data
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_mk'  => 'required|string|max:20|unique:mata_kuliahs,kode_mk,' . $id,
            'nama_mk'  => 'required|string|max:100',
            'sks'      => 'required|integer|min:1|max:6',
            'semester' => 'required|integer|min:1|max:14',
        ]);

        $matakuliah = MataKuliah::findOrFail($id);
        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil diperbarui');
    }

    // 🔹 Hapus Data
    public function destroy($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil dihapus');
    }
}
