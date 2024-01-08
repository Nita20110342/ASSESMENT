<!-- resources/views/dosen/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Dosen</h1>
    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ $dosen->nip }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosen->nama }}" required>
        </div>
        <div class="form-group">
            <label for="matakuliah">Mata Kuliah:</label>
            <input type="text" class="form-control" id="matakuliah" name="matakuliah" value="{{ $dosen->matakuliah }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
