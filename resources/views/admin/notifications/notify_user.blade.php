@extends('components.layout')

@section('content')
    <div class="container">
        <form action="{{ route('notifications.save',$user->id) }}" method="POST">
            @csrf
            <p>{{$user->id}}</p>
                <h1>Enter Your Notification Message</h1>
            <div class="form-group">
                <label for="info">message</label>
                <textarea name="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
