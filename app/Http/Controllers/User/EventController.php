<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {

        $members = Member::where('user_id', auth()->id())->get();
        return view('events.index', compact('members'));
    }


    public function store(Request $request)
    {
        // Step 1: Validate request data
        $validated = $request->validate([
            'name'            => 'required|string|max:255',
            'date'            => 'required|date',
            'category'        => 'nullable|string|max:255',
            'rsvp_date'       => 'nullable|date',
            'assigned_event'  => 'nullable|string|max:255',
            'owner'           => 'nullable|string|max:255',
            'description'     => 'nullable|string',
            'invite_clique'   => 'nullable|array', // expect array of member IDs
            'invite_clique.*' => 'exists:members,id',
        ]);

        // Step 2: Create the event record
        $event = Event::create([
            'user_id'         => Auth::id(), // or pass user_id from request if needed
            'name'            => $validated['name'],
            'date'            => $validated['date'],
            'category'        => $validated['category'] ?? null,
            'rsvp_date'       => $validated['rsvp_date'] ?? null,
            'assigned_event'  => $validated['assigned_event'] ?? null,
            'owner'           => $validated['owner'] ?? null,
            'description'     => $validated['description'] ?? null,
        ]);
        if (!empty($validated['invite_clique'])) {
            $event->members()->attach($validated['invite_clique']);
        }

        return redirect()->route('event')->with('success', 'Event registered successfully');
    }
}
