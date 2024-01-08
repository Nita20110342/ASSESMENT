<!-- resources/views/mahasiswa/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="form-group">
            <label for="prodii">Program Studi:</label>
            <input type="text" class="form-control" id="prodii" name="prodii" value="{{ $mahasiswa->prodi }}" required>
        </div>
        <button phptype="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
