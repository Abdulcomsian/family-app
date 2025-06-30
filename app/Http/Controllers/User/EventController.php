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
        $event = Event::where('user_id', Auth::id())->get();
        return view('events.index', compact('members', 'event'));
    }



    public function store(Request $request)
    {
        // Step 1: Validate the incoming data, including image
        $validated = $request->validate([
            'name'            => 'required|string|max:255',
            'date'            => 'required|date',
            'category'        => 'nullable|string|max:255',
            'rsvp_date'       => 'nullable|date',
            'assigned_event'  => 'nullable|string|max:255',
            'owner'           => 'nullable|string|max:255',
            'description'     => 'nullable|string',
            'invite_clique'   => 'nullable|array',
            'invite_clique.*' => 'exists:members,id',
            'image_url'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // <-- image validation
        ]);

        // Step 2: Handle image upload if exists
        $imagePath = null;
        if ($request->hasFile('image_url')) {
            $uploadedImage = $request->file('image_url');
            $imagePath = $uploadedImage->store('albums', 'public'); // stores in storage/app/public/events
        }

        // Step 3: Create the event
        $event = Event::create([
            'user_id'         => Auth::id(),
            'name'            => $validated['name'],
            'date'            => $validated['date'],
            'category'        => $validated['category'] ?? null,
            'rsvp_date'       => $validated['rsvp_date'] ?? null,
            'assigned_event'  => $validated['assigned_event'] ?? null,
            'owner'           => $validated['owner'] ?? null,
            'description'     => $validated['description'] ?? null,
            'image_url'       => $imagePath ? 'storage/' . $imagePath : null, // store public path
        ]);



        // Step 4: Attach clique members if any
        if (!empty($validated['invite_clique'])) {
            $event->members()->attach($validated['invite_clique']);
        }

        return redirect()->route('event')->with('success', 'Event registered successfully');
    }
}
