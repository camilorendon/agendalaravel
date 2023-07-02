@extends('layouts.app')

@section('content')
    <h1>Create Role</h1>

    <form method="POST" action="{{ route('roles.store') }}">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
