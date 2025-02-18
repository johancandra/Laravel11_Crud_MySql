<!-- resources/views/admin/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Admin</h1>
        <form action="{{ route('admin.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user">User</label>
                <textarea name="user" class="form-control" id="user" required>{{ $admin->user }}</textarea>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <textarea name="password" class="form-control" id="password" required>{{ $admin->password }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection