@extends('layouts.app')
@section('title', 'Edit')
@section('content')
<div>
    <h1>Edit User</h1><br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('users.update', ['user' => $user->IdUser]) }}">
        @csrf
        @method('PUT')
        <label>Email:</label><br>
        <input type="text" name="Email" value="{{ $user->Email }}"><br>
        <label>Password:</label><br>
        <input type="password" name="Password" value="{{ $user->Password }}"><br>
        <label>Name:</label><br>
        <input type="text" name="Name" value="{{ $user->Name }}"><br>
        <label>Reset:</label><br>
        <input type="checkbox" name="Reset" {{ $user->Reset ? 'checked' : '' }}><br>
        <label>Confirm:</label><br>
        <input type="checkbox" name="Confirm" value="1" {{ $user->Confirm ? 'checked' : '' }}><br>
        <label>Token:</label><br>
        <input type="text" name="Token" value="{{ $user->Token }}"><br><br>
        <input type="submit" value="Guardar"><a href="{{ route('users.index') }}" class="btn btn-primary"> Back</a>
    </form>
</div>
@endsection