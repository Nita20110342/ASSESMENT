<!-- resources/views/matakuliah/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Matakuliah</h1>
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="matakuliah">Nama Matakuliah:</label>
            <input type="text" class="form-control" id="matakuliah" name="matakuliah" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
