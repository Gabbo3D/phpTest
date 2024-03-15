@extends('layouts.app')
@section('title', 'Create')
@section('content')
    <h3>Create User</h3><br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <label>Email:</label><br>
        <input type="text" name="Email" value="{{ old('Email') }}"><br>
        <label>Password:</label><br>
        <input type="password" name="Password" value="{{ old('Password') }}"><br>
        <label>Name:</label><br>
        <input type="text" name="Name" value="{{ old('Name') }}"><br>
        <label>Reset:</label><br>
        <input type="checkbox" name="Reset" value="1"><br>
        <label>Confirm:</label><br>
        <input type="checkbox" name="Confirm" value="1"><br>
        <label>Token:</label><br>
        <input type="text" name="Token" value="{{ old('Token') }}"><br><br>
        <input type="submit" value="Guardar"><a href="{{ route('users.index') }}" class="btn btn-primary"> Back</a>
    </form>
@endsection
