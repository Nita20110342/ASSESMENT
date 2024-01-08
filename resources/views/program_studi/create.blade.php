<!-- resources/views/program_studi/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Program Studi</h1>
    <form action="{{ route('program_studi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_program_studi">Nama Program Studi:</label>
            <input type="text" class="form-control" id="nama_program_studi" name="nama_program_studi" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
