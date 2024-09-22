<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->notifications;
        return view('client.notifications.notification', compact('notifications'));
    }

    public function create($id)
    {
        $user = User::findOrFail($id);
        return view('admin.notifications.notify_user',compact('user'));
    }

    public function save(Request $request, $id)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $user = User::findOrFail($id);

        $user->notify(new UserNotification($request->message));


        return redirect()->back()->with('success', 'Notification sent successfully.');
    }
}

