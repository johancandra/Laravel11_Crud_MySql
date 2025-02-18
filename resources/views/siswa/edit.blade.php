<!-- resources/views/siswa/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Siswa</h1>
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <textarea name="nama" class="form-control" id="nama" required>{{ $siswa->nama }}</textarea>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <textarea name="kelas" class="form-control" id="kelas" required>{{ $siswa->kelas }}</textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" required>{{ $siswa->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection