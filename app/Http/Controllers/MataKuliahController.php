<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'matakuliah' => 'required|max:255',
        ]);

        Matakuliah::create($validatedData);

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil ditambahkan!');
    }

    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
        $validatedData = $request->validate([
            'matakuliah' => 'required|max:255',
        ]);

        $matakuliah->update($validatedData);

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil diperbarui!');
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil dihapus!');
    }
}