<!-- resources/views/matakuliah/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Matakuliah</h1>
    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="matakuliah">Nama Matakuliah:</label>
            <input type="text" class="form-control" id="matakuliah" name="matakuliah" value="{{ $matakuliah->nama_matakuliah }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
