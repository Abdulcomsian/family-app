<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class GiftsController extends Controller
{
    public function index()
    {
        $members = Member::where('user_id', auth()->id())->latest()->get();
        return view('gifts.index', compact('members'));
    }
}
