<!-- resources/views/admin/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Admin</h1>
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user">User</label>
                <textarea name="user" class="form-control" id="user" required></textarea>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <textarea name="password" class="form-control" id="password" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection