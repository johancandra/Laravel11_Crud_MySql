<!-- resources/views/siswa/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Siswa</h1>
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <textarea name="nama" class="form-control" id="nama" required></textarea>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <textarea name="kelas" class="form-control" id="kelas" required></textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection