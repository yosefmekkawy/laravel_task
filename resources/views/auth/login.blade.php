@extends('components.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-6">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <form action="{{route('login')}}" method="post" class="p-4 bg-light my-form">

                    @csrf
                    <h1 class="text-center my-5">Login</h1>
                    <div class="form-floating my-5">
                        <input type="text" class="form-control" id="floatingNumber" placeholder="Phone Number" name="phone">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                    <div class="form-floating my-5">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <input type="submit" class="btn btn-success form-control">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('styling')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
