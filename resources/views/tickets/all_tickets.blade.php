@extends('components.layout')

@section('content')
    @include('components.navbar')
    <div class="container">
        <h1>{{ auth()->user()->type === 'admin' ? 'All Tickets' : 'My Tickets' }}</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Ticket ID</th>
                <th>Title</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->type }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td>
                        <a href="{{ route('ticket.view', $ticket->id) }}" class="btn btn-primary">View</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No tickets found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
