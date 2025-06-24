<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index()
    {

        $albums = Album::with('coverPhoto')->get();
        // dd($albums);
        $members = Member::where('user_id', auth()->id())->latest()->get();
        return view('album.index', [
            'albums' => $albums,
            'members' => $members,
            'isSingleView' => false
        ]);
    }

    public function show($id)
    {
        $album = Album::with('photos')->findOrFail($id);
        $members = Member::where('user_id', auth()->id())->latest()->get();

        return view('album.index', [
            'album' => $album,
            'members' => $members,
            'isSingleView' => true
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
}
