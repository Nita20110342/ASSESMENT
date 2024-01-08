<!-- resources/views/program_studi/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Program Studi</h1>
    <form action="{{ route('program_studi.update', $programStudi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_program_studi">Nama Program Studi:</label>
            <input type="text" class="form-control" id="nama_program_studi" name="nama_program_studi" value="{{ $programStudi->nama_program_studi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
