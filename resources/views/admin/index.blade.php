@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin</h1>
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah Admin</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admin as $admin_)
                    <tr>
                        <td>{{ $admin_->user }}</td>
                        <td>{{ $admin_->password }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $admin_->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.destroy', $admin_->id) }}" method="POST" style="display:inline;">
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