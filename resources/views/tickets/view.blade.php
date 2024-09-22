@extends('components.layout')

@section('content')
    @include('components.navbar')
    <div class="container py-5">
        <h1 class="text-center">{{ $ticket->title }}</h1>
        <p class="text-center"><strong>Type:</strong> {{ $ticket->type }}</p>
        <p class="text-center"><strong>Info:</strong> {{ $ticket->info }}</p>

        <hr>

        <h2>Comments</h2>
        @if($ticket->comments->isEmpty())
            <p>No comments yet.</p>
        @else
            @foreach($ticket->comments as $comment)
                <div class="card my-3">
                    <div class="card-body">
                        <p>{{ $comment->content }}</p>
                        <small>Posted by: {{ $comment->user->username }} on {{ $comment->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                </div>
            @endforeach
        @endif

        <hr>

        <h3>Add a Comment</h3>
        <form action="{{ route('comments.save', $ticket->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Enter your comment..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </form>
    </div>
@endsection
