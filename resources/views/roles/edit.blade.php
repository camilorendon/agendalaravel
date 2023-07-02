@extends('layouts.app')

@section('content')
    <h1>Edit Role</h1>

    <form method="POST" action="{{ route('roles.update', $role->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $role->name }}" required>
        </div>

        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $role->title }}" required>
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
