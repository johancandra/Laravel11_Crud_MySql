@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $siswa_)
                    <tr>
                        <td>{{ $siswa_->nama }}</td>
                        <td>{{ $siswa_->kelas }}</td>
                        <td>{{ $siswa_->alamat }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $siswa_->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('siswa.destroy', $siswa_->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection