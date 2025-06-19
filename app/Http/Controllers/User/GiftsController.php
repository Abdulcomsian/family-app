<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiftsController extends Controller
{
    public function index()
    {
        return view('gifts.index');
    }
}
