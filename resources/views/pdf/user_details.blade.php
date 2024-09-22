@extends('components.layout')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">User Details Pdf</h1>
            <p>Name: {{$user->username}}</p>
            <p>Phone: {{$user->phone}}</p>
            <p>Email: {{$user->email}}</p>
            <p>Type: {{$user->type}}</p>

        </div>
    </div>
@endsection

