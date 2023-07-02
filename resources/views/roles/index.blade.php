@extends('layouts.app')

@section('content')
    <h1>Roles</h1>

    <a href="{{ route('roles.create') }}">Create New Role</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->title }}</td>
                    <td>
                        <a href="{{ route('roles.edit', $role->id) }}">Edit</a>
                        <form method="POST" action="{{ route('roles.destroy', $role->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this role?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
