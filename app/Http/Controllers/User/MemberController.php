<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMemberMail;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MemberController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
        ]);
        $member = Member::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'email' => $validated['email']
        ]);
        // dd($member);

        Mail::to($member->email)->send(new WelcomeMemberMail($member));

        return redirect()->route('home')->with('success', 'User invited successfully.');
    }
    public function index()
    {
        $members = Member::where('user_id', Auth::id())->latest()->get();
        // dd($members);
        return view('home', compact('members'));
    }
}
