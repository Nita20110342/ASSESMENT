<!-- resources/views/matakuliah/index.blade.php -->

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
    <h1>Daftar Matakuliah</h1>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Matakuliah</a>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered" id="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Matakuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $matakuliah->matakuliah }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST" style="display: inline">
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
