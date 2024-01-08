<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramStudi;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programStudis = ProgramStudi::all();
        return view('program_studi.index', compact('programStudis'));
    }

    public function create()
    {
        return view('program_studi.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_program_studi' => 'required|max:255',
        ]);

        ProgramStudi::create($validatedData);

        return redirect()->route('program_studi.index')->with('success', 'Program Studi berhasil ditambahkan!');
    }

    public function edit(ProgramStudi $programStudi)
    {
        return view('program_studi.edit', compact('programStudi'));
    }

    public function update(Request $request, ProgramStudi $programStudi)
    {
        $validatedData = $request->validate([
            'nama_program_studi' => 'required|max:255',
        ]);

        $programStudi->update($validatedData);

        return redirect()->route('program_studi.index')->with('success', 'Program Studi berhasil diperbarui!');
    }

    public function destroy(ProgramStudi $programStudi)
    {
        $programStudi->delete();

        return redirect()->route('program_studi.index')->with('success', 'Program Studi berhasil dihapus!');
    }
}