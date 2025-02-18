<!-- resources/views/siswa/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $siswa->nama }}</h1>
        <p>{{ $siswa->kelas }}</p>
        <p>{{ $siswa->alamat }}</p>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
