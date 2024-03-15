@extends('layouts.app')
@section('title', 'Index')
@section('content')
    <div class="container">
        <h1>Users</h1><br>
        <div class="table-responsive mt-3">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th style="border-top: none">Name</th>
                        <th style="border-top: none">Email</th>
                        <th style="border-top: none"></th>
                        <th style="border-top: none"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->Name }}</td>
                            <td>{{ $user->Email }}</td>
                            <td> | </td>
                            <td>
                                <a href="{{ route('users.show', $user) }}" class="btn btn-info btn-sm"> Show</a>
                                <a href="{{ route('users.edit', $user) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <div class="btnLar">
            <a href="{{ route('users.create') }}" class="btn btn-primary btnLar">New</a>      
            <a href="{{ route('home.index') }}" class="btn btn-danger "> Back</a>      
        </div>
        
    </div>
@endsection
