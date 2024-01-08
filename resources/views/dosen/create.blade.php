<!-- resources/views/dosen/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Dosen</h1>
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="matakuliah">Mata Kuliah:</label>
            <input type="text" class="form-control" id="matakuliah" name="matakuliah" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
