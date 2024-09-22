<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;
use App\Models\Tickets;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save(CommentFormRequest $request, $ticket_id)
    {
        $data=$request->validated();
        $ticket = Tickets::findOrFail($ticket_id);

        Comment::create([
            'content' => $data['content'],
            'tickets_id' => $ticket->id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('ticket.view', $ticket->id)
            ->with('success', 'Comment added successfully.');
    }
}
