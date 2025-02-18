<!-- resources/views/admin/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $admin->user }}</h1>
        <p>{{ $admin->password }}</p>
        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
