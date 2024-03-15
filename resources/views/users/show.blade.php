@extends('layouts.app')
@section('title', 'Show')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show</div>

                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $user->IdUser }}</p>
                        <p><strong>Nombre:</strong> {{ $user->Name }}</p>
                        <p><strong>Email:</strong> {{ $user->Email }}</p>
                        <p><strong>Confirm:</strong> {{ $user->Confirm }}</p>
                        <br>
                        <a href="{{ route('users.index') }}" class="btn btn-primary"> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
