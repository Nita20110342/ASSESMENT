<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:dosens|max:255',
            'nama' => 'required|max:255',
            'matakuliah' => 'required|max:255',
        ]);

        Dosen::create($validatedData);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan!');
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validatedData = $request->validate([
            'nip' => 'required|max:255|unique:dosens,nip,' . $dosen->id,
            'nama' => 'required|max:255',
            'matakuliah' => 'required|max:255',
        ]);

        $dosen->update($validatedData);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui!');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus!');
    }
}
