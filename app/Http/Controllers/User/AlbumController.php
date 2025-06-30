<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Event;
use App\Models\Member;
use App\Models\Photo;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index()
    {

        $albums = Album::with('coverPhoto')->get();
        // dd($albums);
        $members = Member::where('user_id', auth()->id())->latest()->get();
        $event = Event::where('user_id', auth()->id())->get();
        $task = Task::with('members')->where('user_id', auth()->id())->get();
        // dd($task);
        // dd($task);
        return view('album.index', [
            'albums' => $albums,
            'members' => $members,
            'event' => $event,
            'task' => $task,
            'isSingleView' => false
        ]);
    }

    public function show($id)
    {
        $album = Album::with('photos')->findOrFail($id);
        $members = Member::where('user_id', auth()->id())->latest()->get();
        $event = Event::where('user_id', auth()->id())->orderByDesc('date')->get();
        $task = Task::where('user_id', auth()->id())->get();
        // dd($event);
        return view('album.index', [
            'album' => $album,
            'members' => $members,
            'event' => $event,
            'task' => $task,
            'isSingleView' => true,
        ]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'photos' => 'required|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $album = Album::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
        ]);

        foreach ($request->file('photos') as $photo) {
            $path = $photo->store('albums', 'public'); // save in storage/app/public/albums
            $album->photos()->create([
                'image_url' => $path,
            ]);
        }

        return redirect()->back()->with('success', 'Album created successfully!');
    }

    public function addImages(Request $request)
    {
        $request->validate([
            'album_id' => 'required|exists:albums,id',
            'image_url.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $photos = [];

        if ($request->hasFile('image_url')) {
            foreach ($request->file('image_url') as $file) {
                $path = $file->store('albums', 'public');

                $photos[] = Photo::create([
                    'album_id' => $request->album_id,
                    'image_url' => $path, // stored like "photos/example.jpg"
                ]);
            }
        }

        return back()->with('success', 'Photos uploaded successfully.');
    }
}
