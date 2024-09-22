<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{

    public function create(Request $request)
    {
        return view('client.tickets.create_ticket');
    }

    public function save(TicketFormRequest $request)
    {
        $ticket=Tickets::create([
            'title' => $request->title,
            'type' => $request->type,
            'info' => $request->info,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('ticket.view', $ticket->id)
            ->with('success', 'Ticket created successfully.');
    }

    public function view($id)
    {
        $ticket = Tickets::with('comments')->with('comments.user')->findOrFail($id);

        return view('tickets.view', compact('ticket'));
    }

    public function index()
    {
        $user = Auth::user();

        if ($user->type === 'admin') {
            $tickets = Tickets::with('user')->get();
        } else {
            $tickets = Tickets::where('user_id', $user->id)->get();
            $tickets->user=auth()->user();
        }

        return view('tickets.all_tickets', compact('tickets'));
    }

}
