<!-- resources/views/program_studi/index.blade.php -->

@extends('layouts.app')
@section('content')

<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success">
            <div>{{ session('success')}}</div>
            </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
    <h1>Daftar Program Studi</h1>
    <a href="{{ route('program_studi.create') }}" class="btn btn-primary">Tambah Program Studi</a>
</div>
<div class="card-body">
<table class="table table-striped table-bordered" id="table">
<thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programStudis as $programStudi)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $programStudi->nama_program_studi }}</td>
                    <td>
                        <a href="{{ route('program_studi.edit', $programStudi->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('program_studi.destroy', $programStudi->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
