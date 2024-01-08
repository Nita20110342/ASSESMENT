<!-- resources/views/dosen/index.blade.php -->

@extends('layouts.app')
@section('content')

div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success">
            <div>{{ session('success')}}</div>
            </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
    <h1>Daftar Dosen</h1>
    <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Dosen</a>
</div>
<div class="card-body">
<table class="table table-striped table-bordered" id="table">
<thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->matakuliah }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display: inline">
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
