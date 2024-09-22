@extends('components.layout')

@section('content')
    @include('components.navbar')
    <div class="container" style="min-height: 80vh">
        <div class="row justify-content-center align-items-center h-100" style="min-height: 80vh">
            <div class="col-lg-6">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <p>{{  auth()->id()}}</p>
                <form action="{{route('tickets.save')}}" method="post" class="p-4 bg-light my-form">

                    @csrf
                    <h1 class="text-center my-5">Create Support Ticket</h1>
                    <div class="form-floating my-5">
                        <input type="text" class="form-control" id="floatingNumber" placeholder="Title" name="title">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-group mb-5">
                        <label for="type">Type</label>
                        <select name="type" class="form-control" required>
                            <option value="" selected>Select Ticket Type</option>
                            <option value="request">Request</option>
                            <option value="problem">Problem</option>
                        </select>
                    </div>
                    <div class="form-group mb-5">
                        <label for="info">Info</label>
                        <textarea name="info" class="form-control" required></textarea>
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
